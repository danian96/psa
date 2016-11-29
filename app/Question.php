<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $table = "questions";
    protected $primaryKey = 'id';

    protected $fillable = ['id', 'subject_id', 'area_id', 'management_id', 'text', 'code', 'questionType'];

    public function option()
    {
        return $this->hasMany('App\Option');
    }

    public function examanswer()
    {
        return $this->hasMany('App\ExamAnswer');
    }

    public function practiceanswer()
    {
        return $this->hasMany('App\PracticeAnswer');
    }

    public function area()
    {
        return $this->belongsTo('App\Area');
    }

    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }

    public function management()
    {
        return $this->belongsTo('App\Management');
    }

}
