<?php

namespace App;

use App\Place;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Device extends Model
{
   use SoftDeletes;

   protected $dates=[
   	'deleted_at'
   ];

   protected $fillable=[
   	'name',
   	'place_id'
   ];

    function place()
    {
        return $this->belongsTo(Place::class);
    }
}
