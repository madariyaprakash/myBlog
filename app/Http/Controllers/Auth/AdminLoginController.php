<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;

class AdminLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin');
    }


    public function showLoginForm()
    {
        return view('auth.admin-login');  
    }

    public function login(Request $request)
    {
        //validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6' 
        ]);

        //if attempt to login user
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
            {
                //if it is successfull then redirected to the intended location.
                return redirect()->intended(route('admin.dashboard'));
            }
            //if it failed then it will redirect to the login page again with pre-filled user login info.
         
        return redirect()->back()->withInput($request->only('email', 'remember'));
            
        Session::flash('message', 'This is a message!'); 

    }
    
}
