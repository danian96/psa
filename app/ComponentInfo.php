<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComponentInfo extends Model
{
    //
    protected $table = "componentsinfo";
    protected $primaryKey = 'id';

    public function component()
    {
        return $this->belongsTo('App\Component');
    }
    public function info()
    {
        return $this->belongsTo('App\Info');
    }
}
