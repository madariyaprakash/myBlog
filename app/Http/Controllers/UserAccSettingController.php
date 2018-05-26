<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class UserAccSettingController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    } 

	public function userDetails()
	{
		//$username = $post->title;
		return view('user_acc_setting.userDetails');
	}

}
