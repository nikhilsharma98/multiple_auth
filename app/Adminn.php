<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adminn extends Model
{
    //
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'image',
    ];
}
