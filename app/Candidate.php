<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    //
    protected  $table="cantidates";
    protected $primayKey = 'id';
    protected $fillable = ['id','codes','name'];
}
