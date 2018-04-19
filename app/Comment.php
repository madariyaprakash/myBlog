<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //and here we need to bind the post model, and put belongsTo('App\Post'). because all comments has single post in every post.
    // or we can say that each post will have many comments.
    public function post()
    {
    	return $this->belongsTo('App\Post');
    }
}
