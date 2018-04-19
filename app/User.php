<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function likes() // here one user can do many likes in different2 post.
    {
        return $this->hasMany('App\Like');
    }

    public function posts() // customer can check multiple post and upvote at the same time.
    {
        return $this->hasMany('App\Post');
    }
}
