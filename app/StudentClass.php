<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    //
    protected $fillable = [
        'class', 'section',
    ];

    // public function teacher()
    // {
    //     return $this->belongsTo('App\Teacher');
    // }

    public function teacherStudentclass()
    {
        return $this->hasMany('App\TeacherStudentClass');
    }

    public function student()
    {
        return $this->hasMany('App\Studentt');
    }

    public function teacher()
    {
        return $this->hasMany('App\Teacherr');
    }

    public function student_work()
    {
        return $this->hasMany('App\StudentWork');
    }
}
