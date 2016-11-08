<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    //
    protected $table = "faculties";
    protected $primaryKey = 'id';

    public function component()
    {
        return $this->belongsTo('App\Component');
    }

    public function area()
    {
        return $this->belongsTo('App\Area');
    }

    public function career()
    {
        return $this->hasMany('App\Career');
    }
}
