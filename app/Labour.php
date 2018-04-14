<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Labour extends Model
{
    use SoftDeletes;
    
    protected $dates=[
    	'deleted_at',
    	'work_start_date'
    ];

    protected $fillable=[
    	'employee_id',
    	'expected_rate',
    	'work_start_date'.
    	'recommend_employee_id'
    ];
}
