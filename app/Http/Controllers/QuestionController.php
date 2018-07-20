<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Question;
use App\User;
use Session;
use Image;

class QuestionController extends Controller
{
    public function __construct() {
        $this->middleware('auth');  // to restrict permission to open the post records for guest users.
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
         //to get the respective user details who logged in and going to ask question
         $user = User::find($id);
         //to fetch the record the asked questions of the logged in user.
         $question = Question::where('user_id', $id)->get();
         //to fetch the all the questions which was asked so far from all the register users
         $total_ques_count = Question::all();
         return view('Questions.create')->withUser($user)->withQuestion($question)->withTotalquestionasked($total_ques_count);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //dd($request);
        $this->validate($request, array(
            'title'  => 'required|max:255',
            'body'   => 'required',
            'post_thumbnail'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1000'
        ));
        
        $user = User::find($id);

        $question = new Question();
        $question-> title = $request-> title;
        $question-> body  = $request-> body;

        $question->user_id = $user->id; //here we need to put reference from which this post id is came from.

        if( $request->hasFile('post_thumbnail') ) {
            $post_thumbnail     = $request->file('post_thumbnail');
            $filename           = time() . '.' . $post_thumbnail->getClientOriginalExtension();
            
            Image::make($post_thumbnail)->resize(200, 50)->save( public_path('ask_uploads/' . $filename ) );

            // Set post-thumbnail url
            $question->post_thumbnail = $filename; 
        }
        else{

            $question->post_thumbnail = null;
        }

        $question->save();
        Session::flash('success', 'Question has been post successfully !');

        return redirect()->route('questions.show', [$question->user_id, $question->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_id, $id)
    {
        //passing the respective user_id from store redirecting option so that use can see the respective posted question
        $user_details = User::find($user_id);
        $user_question = Question::find($id);
        
        //passing the respective posted data to the view
        return view('questions.show')->withUserquestion($user_question)->withUserdetails($user_details); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
