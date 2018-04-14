<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slip extends Model
{
    protected $dates=[
    	'deleted_at',
    	'date_paid'
    ];

    protected $fillable=[
    	'employee_id',
    	'epf_id',
    	'session_id',
    	'salary_id',
    	'otcategory_id'


    ];
}
