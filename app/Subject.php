<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //
    protected $table = "subjects";
    protected $primaryKey = 'id';

    protected $fillable = ['id', 'name', 'area_id', 'code'];


    public function practice()
    {
        return $this->hasMany('App\Practice');
    }
    public function careersubject()
    {
        return $this->hasMany('App\CareerSubject');
    }


}
