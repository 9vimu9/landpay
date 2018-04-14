<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Session extends Model
{
    use SoftDeletes;
    
    protected $dates=[
    	'deleted_at',
    	'start_date',
    	'end_date'
    ];

    protected $fillable=[
    	'year',
    	'month',
    	'start_date',
    	'end_date',
    	'sessioncategory_id',
    	
    ];
}
