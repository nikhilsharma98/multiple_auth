<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacherr extends Model
{
    //
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'address', 'age', 'experience', 'aadhar_id','dob', 'gender',
    ];

    public function studentClass()
    {
        return $this->hasMany('App\studentClass');
    }
    public function teacherStudentclass()
    {
        return $this->hasMany('App\TeacherStudentClass');
    }
}
