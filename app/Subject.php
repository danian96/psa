<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //
    protected $table = "subject";
    protected $primaryKey = 'id';

    public function practice()
    {
        return $this->hasMany('App\Practice');
    }
    public function careersubject()
    {
        return $this->hasMany('App\CareerSubject');
    }


}
