<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //
    protected $table = "persons";
    protected $primaryKey = 'id';

    public function user()
    {
        return $this->hasOne('App\User');
    }
}
