<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //here also we are writing code to tell the post model that this model belongs to category model.
    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

   	// we need to add the tag function so that we could tell the laravel with this model tag belong to.
    public function tags()
    {
    	return $this->belongsToMany('App\Tag');
    }
    //here we have to mention the comment function to bind with comment model
    //and each post will have many comments so we put hasMany('App\Comment') function
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function likes() //here each post will have atleast one like or not at all.
    {
        return $this->belongsTo('App\Like');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
