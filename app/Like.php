<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
	//like function need to make relationship with post and user also so that we could fetch the data later who are the customers who have given upvote in which post.
    public function posts() //here we will have to make relationship between post, user and like table.
    {
    	return $this->belongsTo('App\Post');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
