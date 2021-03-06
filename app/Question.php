<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = ['id'];

    public function answers() {
        return $this->hasMany('App\Answer');
    }
}
