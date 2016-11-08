<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    //
    protected $table = "practices";
    protected $primaryKey = 'id';

    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }

    public function question()
    {
        return $this->hasMany('App\Question');
    }

    public function practiceanswer()
    {
        return $this->hasMany('App\PracticeAnswer');
    }

}
