<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Epf extends Model
{
    const EPF_AVAILABLE='1';
	const EPF_UNAVAILABLE='0';

	protected $fillable=[
		'employee_id',
		'status',
		'start_session_id'
	];
}
