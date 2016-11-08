<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PracticeAnswer extends Model
{
    //
    protected $table = "practiceanswers";
    protected $primaryKey = 'id';

    public function practice()
    {
        return $this->belongsTo('App\Practice');
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
