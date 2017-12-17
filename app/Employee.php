<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable = array('name',
            'passport',
            'dob',
            'gender',
            'address');
}
