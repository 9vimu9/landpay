<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dad extends Model
{
	const DEDUCTION='0';
	const ALLOWENCE='1';
	const DISPLAY_ONLY='2';

	const AVAILABLE_DAD='0';
	const UNAVAILABLE_DAD='1';
}
