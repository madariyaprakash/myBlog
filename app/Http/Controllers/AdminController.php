<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
      public function __construct()
    {
        //here we have created middleware which handles the authorization stuffs. so here we have to mention auth as a admin because it will take use by default. so that before communicate with the view controller will check with auth.
        $this->middleware('auth:admin');
    }


    public function index()
    {
        return view('admin');
    }
}
