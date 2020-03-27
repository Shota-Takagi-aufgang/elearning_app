<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $guarded = ['id'];

    public function lessons() {
        return $this->hasMany('App\Lesson');
    }
}
