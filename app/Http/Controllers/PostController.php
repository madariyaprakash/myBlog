<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;                   //Inheriting the Post Model
use Session;                    // session call need to be import first.
use App\Http\Controllers\Controller;
use App\Category;
use App\Tag;
use Image;

class PostController extends Controller
{

    public function __construct() {
        $this->middleware('auth:admin');  // to restrict permission to open the post records for guest users.
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // create varaible to retrive the post data.
        //$post = Post::all();             TO DISPLAY ALL THE RECORDS WITHOUT PAGINATION 
        $post = Post::orderby('id', 'desc')->SimplePaginate(7); //TO PAGINATE WE CAN USE PAGINATE METHOD AND ENTER THE VALUE HOW MANY ROW WE WANT TO DISPLAY/PAGE
        //then pass the data to index view to see all the details
        return view('posts.index')->withPosts($post); //with('post', $post)
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts.create')->withCategories($categories)->withTags($tags);  //to send the request to particular file.
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        //validate the storing data whether it is following the particular criteria.
        $this->validate($request, array(
            'title'         => 'required|max:255',
            'slug'          => 'required|alpha-dash|min:5|max:255|unique:posts,slug',
            'category_id'   => 'required|integer',
            'body'          => 'required',
            'post_thumbnail'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1000'
        ));

        //dd($request);
        //store in the database
        $post = new Post;

        $post-> title = $request-> title;
        $post-> slug = $request-> slug;
        $post-> category_id = $request-> category_id;
        $post-> body = $request-> body;

        // $imageName = time().'.'.$request->post_thumbnail->getClientOriginalExtension();
        // $request->post_thumbnail->move(public_path('uploads'),$imageName);
        // $post-> post_thumbnail = $imageName;

         //Check if file is present
        if( $request->hasFile('post_thumbnail') ) {
            $post_thumbnail     = $request->file('post_thumbnail');
            $filename           = time() . '.' . $post_thumbnail->getClientOriginalExtension();
            
            Image::make($post_thumbnail)->resize(200, 50)->save( public_path('uploads/' . $filename ) );

            // Set post-thumbnail url
            $post->post_thumbnail = $filename;
        }

        $post->save();

        $post->tags()->sync($request->tags,false);
        //before redirecting to the message display page we will store the message in session.
        Session::flash('success','Blog has been post successfully!!');  //here we are using flash for the particular page.

        //redirecting to another page
        return redirect()-> route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //now here we will retrive the data and display in success page real time.
        $post = Post::find($id);
         //now $post has all the value related to post because $id will fetch all the info and will pass to $post variable.

        //redirect to show view/posts/show page to display the message.
        return view('posts.show') ->with('postdata',$post); //here we are passing the $post value to the post view so that there we can fech and display required item which need to be display.
        // we can also write this with() method int thisway (withPost($post))
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Find the post in the database and save as a var.
        $post = Post::find($id);

        $cats = array();
        $categories = Category::all();
        foreach ($categories as $category) 
        {
            $cats[$category->id] = $category->name;
            //all the categories value will be stored in cats[] as a pair of key value.
        }

        $tags = Tag::all();
        $tags2 = array();
        foreach($tags as $tag)
        {
            $tags2[$tag->id] = $tag->name;
        }
        // return the var to the view to fetch the stored data.
        return view('posts.edit')->withPost($post)->withCategories($cats)->withTags($tags2);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        
        //here we are writing condition for slug, If don't want to update means it will remain same or else we can update too.
        if( $request->input('slug') == $post->slug){
            //validate the data
        $this->validate($request, array(
            'title' => 'required|max:255',
            'category_id' => 'required|integer',
            'body' => 'required'
        ));            
        } else {
            //validate the data
        $this->validate($request, array(
            'title' => 'required|max:255',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'category_id' => 'required|integer',
            'body' => 'required'
        ));   
        }
        
        //save the data into the database
        $post = Post::find($id);

        $post-> title = $request->input('title');
        $post-> slug = $request->input('slug');
        $post-> category_id = $request->input('category_id');
        $post-> body = $request->input('body');
        $post->save();

        $post->tags()->sync($request->tags); /*here we will not add the second parameter, because this time we want to override the previous values with the newer updated one so 'false' parameter we won't give. */
        //flash the data with successfully data saved acknowledge
        Session::flash('success','Blog has been updated successfully!!');

        //redirect to the Posts/show to see the updated data also
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::Find($id);
        $post->tags()->detach(); //here we need to detach the tags while deleting the post
        $imgPath = $post->post_thumbnail;
        unlink('uploads/' . $imgPath); //unlink we are using to delete the pic of respective post which we have uploaded for the post.
        $post->Delete();
        
        Session::flash('success', 'Post "'.$post->title.'" has been deleted successfully');
        return redirect() ->route('posts.index');
    }


    public function postLike($id)
    {

    }
}
