<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //
    protected $table = "areas";
    protected $primaryKey = 'id';

    public function component()
    {
        return $this->belongsTo('App\Component');
    }
    public function faculty()
    {
        return $this->hasMany('App\Faculty');
    }
    public function exam()
    {
        return $this->hasOne('App\Exam');
    }
}
