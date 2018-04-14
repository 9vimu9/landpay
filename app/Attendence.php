<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    protected $fillable=[
    	'employee_id',
    	'device_id',
    	'machinefunction_id',
    	'date'
    ];
}
