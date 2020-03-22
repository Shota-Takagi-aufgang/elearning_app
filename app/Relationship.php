<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relationship extends Model
{
    // For Activities
    public function activity() {
        return $this->morphOne('App\Activity', 'notifiable');
    }

    public function follower() {
        return $this->belongsTo('App\User', 'follower_id', 'id');
    }

    public function followed() {
        return $this->belongsTo('App\User', 'followed_id', 'id');
    }
}
