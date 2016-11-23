<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    //
    protected $table = "exams";
    protected $primaryKey = 'id';
    protected $fillable = ['area_id', 'candidate_id', 'date'];


    public function candidate()
    {
        return $this->belongsTo('App\Candidate');
    }

    public function area()
    {
        return $this->belongsTo('App\Area');
    }

    public function examanswer()
    {
        return $this->hasMany('App\ExamAnswer');
    }

}
