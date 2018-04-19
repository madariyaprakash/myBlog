<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	//manualy telling the model that we need to use categories table here.
    protected $table = 'categories';

    //telling the category model that each catogry can have many post.
    public function post()
    {
    	return $this->hasMany('App\Post');    
    }
}
