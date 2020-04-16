<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentWork extends Model
{
    //
    protected $fillable = [
        'title', 'description', 'student_class_id', 'studentt_id', 
    ];

    public function student_class()
    {
        return $this->belongsTo('App\StudentClass');
    }

    public function student()
    {
        return $this->belongsTo('App\Studentt');
    }
}
