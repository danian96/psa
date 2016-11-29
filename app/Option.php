<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    //
    protected $table = "options";
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'code', 'text', 'answer', 'question_id'];

    public function examanswer()
    {
        return $this->hasMany('App\ExamAnswer');
    }

    public function question()
    {
        return $this->belongsTo('App\Question');
    }

    public function practiceanswer()
    {
        return $this->hasMany('App\PracticeAnswer');
    }

}
