<?php

namespace App;
use App\Otcategory;
use App\Designation;
use App\Sessioncategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;
    
    protected $dates=[
    	'deleted_at'
    ];

 //    const AVAILABLE_PRODUCT='available';
	// const UNAVAILABLE_PRODUCT='unavailable';



    protected $fillable=[
    	'id',
    	'name',
    	'address',
    	'address_temperary',
    	'telephone_no_1',
    	'telephone_no_2',
    	'nic',
    	'dob',
    	'date_joined',
    	'sessioncategory_id',
    	'otcategory_id',
    	'designation_id'
    ];
    
    function sessioncategory()
    {
        return $this->belongsTo(Sessioncategory::class);
    }

    function otcategory()
    {
        return $this->belongsTo(Otcategory::class);
    }

     function designation()
    {
        return $this->belongsTo(Designation::class);
    }

}
