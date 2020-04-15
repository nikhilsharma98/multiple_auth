<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacherr extends Model
{
    //
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'address', 'age', 'experience', 'aadhar_id','dob', 'gender', 'student_class_id',
    ];

    public function student_class()
    {
        return $this->belongsTo('App\StudentClass');
    }

    public function teacherStudentclass()
    {
        return $this->hasMany('App\TeacherStudentClass');
    }
}
    