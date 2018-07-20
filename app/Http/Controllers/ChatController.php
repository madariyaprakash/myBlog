<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Events\ChatEvent;

class ChatController extends Controller
{
	public function __construct()
    {
    	$this->middleware('auth');
    } 

   public function chat()
    {
    	return view('chat.chat');
    }
     //we will create send() function which will perform function to load the message in database and connectiones with login user
	public function send(request $request)
    {
    	return $request->all();
    	$user = User::find(Auth::id());
    	event(new ChatEvent($request->message,$user)); //passing the message and user to view with ajax event lister
    } 
}
