<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $guarded = ['id'];
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function lessons() {
        return $this->hasMany('App\Lesson');
    }

    // For follow and follower system
    public function followers() {
        return $this->belongsToMany('App\User', 'relationships', 'followed_id', 'follower_id')->withtimestamps();
    }

    public function followedUsers() {
        return $this->belongsToMany('App\User','relationships','follower_id','followed_id')->withTimestamps();
    }
    
    public function isFollowing($followed_id) {
        return $this->followedUsers()->where('followed_id', $followed_id)->exists();
    }
}
