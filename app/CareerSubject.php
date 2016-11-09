<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CareerSubject extends Model
{
    //
    protected $table = "careerssubject";
    protected $primaryKey = 'id';

    public function career()
    {
        return $this->belongsTo('App\Career');
    }
    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }
}
