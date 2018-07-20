<?php

namespace App\Http\Controllers;

use App\Reply;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReplyController extends Controller
{
     public function __construct() {
        $this->middleware('auth:admin');  // to restrict permission to open the post records for guest users.
    }

    public function create()
    {
    	return view('reply.create');
    }

    public function store(Request $request)
    {
    	$this->validate($request, array(
            'body'          => 'required',
        ));

        $reply = new Reply;
        $reply-> body = $request-> body;
        $reply->save();
        Session::flash('success','reply has been post successfully!!');
        return redirect()-> route('reply.show', $reply->id);

    }
    public function show($id)
    {
        $reply = Reply::find($id)->get();
      
        return view('reply.show')->with('replydata',$reply); 
    }
}
