<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    //
    protected $table = "infos";
    protected $primaryKey = 'id';

    public function componentinfo()
    {
        return $this->hasMany('App\ComponentInfo');
    }
}
