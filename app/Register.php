<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Register extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'registers';
    protected $fillable = [
    	'name','lastname','number','email','password'
    ];
}
