<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function notifiable() {
        return $this->morphTo();
    }

    public function followedUsers() {
        return $this->belongsToMany('App\Activity','relationships','follower_id','followed_id')->withTimestamps();
    }
}
