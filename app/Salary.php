<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
     // protected $dates=['deleted_at'];
    
	const DAILY_SALARY='0';
	const MONTHLY_SALARY='1';

    protected $fillable=[
    	'salary_type',
    	'employee_id',
    	'start_session_id'
    	
    ];
}
