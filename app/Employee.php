<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;
    
    protected $dates=[
    	'deleted_at',
    	'dob',
    	'date_joined'
    ];

 //    const AVAILABLE_PRODUCT='available';
	// const UNAVAILABLE_PRODUCT='unavailable';



    protected $fillable=[
    	'id',
    	'name',
    	'address_current',
    	'address_temperary',
    	'telephone_no_1',
    	'telephone_no_2',
    	'nic',
    	'dob',
    	'date_joined',
    	'session_category_id',
    	'otcategory_id',
    	'designation_id'
    ];
    
}
