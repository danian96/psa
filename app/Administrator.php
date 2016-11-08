<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{

    protected $table = "administrators";
    protected $primaryKey = 'id';

    public function person()
    {
        return $this->belongsTo('App\Person');
    }
}
