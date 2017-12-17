<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medical extends Model
{
    //
        protected $fillable = array('name',
            'passport',
            'dob',
            'gender',
            'inherited',
            'allergy',
            'mental',
            'stroke',
            'diabetes',
            'hypertension',
            'vascular',
            'ashtma',
            'aids');
}
