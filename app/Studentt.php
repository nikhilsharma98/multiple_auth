<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentt extends Model
{
    //
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'father_name', 'mother_name', 'aadhar_id', 'age','dob', 'image', 'gender','address', 'state_id','countary_id',
    ];


    public function state()
    {
        return $this->belongsTo('App\State');
    }
    public function countary()
    {
        return $this->belongsTo('App\Countary');
    }

}
