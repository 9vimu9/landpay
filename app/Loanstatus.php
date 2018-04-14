<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loanstatus extends Model
{
	const COMPLETED='1';
	const LOAN_ISSUED='2';
	const LOAN_ISSUED_DEDUCTION_STOPPED='4';
	const LOAN_NOT_ISSUED='3';
}
