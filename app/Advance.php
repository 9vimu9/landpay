<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Advance extends Model
{
    use softDeletes;
    
    protected $dates=['deleted_at'];

    protected $fillable=[
    	'employee_id',
    	'session_id',
    	'remarks'
    ];
}
