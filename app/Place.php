<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\softDeletes;

class Place extends Model
{
	use softDeletes;
	protected $dates=['deleted_at'];
	protected $fillable=['name'];

}
