<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    //
    protected $fillable = [
        'class', 'section',
    ];

    public function Teacher()
    {
        return $this->belongsTo('App\Teacher');
    }

    public function teacherStudentclass()
    {
        return $this->hasMany('App\TeacherStudentClass');
    }
}
