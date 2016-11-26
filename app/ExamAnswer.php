<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamAnswer extends Model
{
    //
    protected $table = "examsanswer";
    protected $primaryKey = 'id';
    protected $fillable = ['exam_id', 'question_id', 'option_id'];

    public function exam()
    {
        return $this->belongsTo('App\Exam');
    }
    
    public function question()
    {
        return $this->belongsTo('App\Question');
    }
    
    public function option()
    {
        return $this->belongsTo('App\Option');
    }
}
