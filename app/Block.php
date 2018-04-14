<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    protected $fillable=[
    	'name',
    	'start_time',
    	'start_day',
    	'end_time',
    	'end_day',
    	'template_id'
    ];
}
