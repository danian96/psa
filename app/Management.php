<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    //
    protected $table = "managements";
    protected $primaryKey = 'id';

    public function component()
    {
        return $this->belongsTo('App\Component');
    }

    public function question()
    {
        return $this->hasMany('App\Question');
    }
}
