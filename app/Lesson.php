<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $guarded = ['id'];

    public function answers() {
        return $this->hasMany('App\Answer');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function topic() {
        return $this->belongsTo('App\Topic');
    }
}
