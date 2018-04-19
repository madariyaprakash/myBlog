<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    
    public function getIndex(){
    	$posts = Post::paginate(6);
    	return view('blog.index')->withPosts($posts);
    }	


    //function for getSingle page
    public function getSingle($slug){
    	//first we will fetch slug from the DB (get() method is to Requests data from a specified resource. It is kind of collection or array)
    	$post = Post::where('slug', '=', $slug)->first(); //here we are using first() to send one record at a time from array.

    	//returning the $post slug value to the single page, through that we could fetch the specific post information.
    	return view('blog.single')->withPost($post);
    }
}
