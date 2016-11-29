<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreaSubject extends Model
{
    //
    protected $table = "area_subject";
    protected $primaryKey = 'id';

    protected $fillable = ['area_id', 'subject_id'];

    public function area()
    {
        return $this->belongsTo('App\Area');
    }
    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }
}
