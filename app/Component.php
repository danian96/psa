<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    //
    protected $table = "components";
    protected $primaryKey = 'id';
    /*public function area()
    {
        return $this->hasOne('App\Area');
    }
    public function management()
    {
        return $this->hasOne('App\Management');
    }*/
    public function componentinfo()
    {
        return $this->hasMany('App\ComponentInfo');
    }
}
