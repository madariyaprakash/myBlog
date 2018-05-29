<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserAccSettingController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    } 

	public function userDetails($id)
	{
		//$username = $post->title;
		$users = User::find($id);
		return view('user_acc_setting.userDetails')->with('userdetails',$users);
	}

}
