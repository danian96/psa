<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $table = "questions";
    protected $primaryKey = 'id';

    public function option()
    {
        return $this->hasMany('App\Option');
    }

    public function examanswer()
    {
        return $this->hasMany('App\ExamAnswer');
    }

    public function practice()
    {
        return $this->belongsTo('App\Practice');
    }
    public function practiceanswer()
    {
        return $this->hasMany('App\PracticeAnswer');
    }
    /*
    public function exam()
    {
        return $this->belongsTo('App\Exam');
    }
    */
}
