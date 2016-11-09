<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    //
    protected $table = "careers";
    protected $primaryKey = 'id';

    public function faculty()
    {
        return $this->belongsTo('App\Faculty');
    }

    public function component()
    {
        return $this->belongsTo('App\Component');
    }

    public function careersubject()
    {
        return $this->hasMany('App\CareerSubject');
    }


}
