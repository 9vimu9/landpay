<?php

namespace App;

use App\Otcategory;
use Illuminate\Database\Eloquent\Model;

class Otcategorystatus extends Model
{
	const ALLOW_CLOCKIN_OT=1;

	const ALLOW_CLOCKOUT_OT=1;

	const ALLOW_FIX_RATE=1;

	const ALLOW_DOUBLE_OT_SATURDAY=1;

	const ALLOW_DOUBLE_OT_SUNDAY=1;

	const ALLOW_DOUBLE_OT_HOLIDAY=1;

	const ALLOW_OT_WEEKDAY=1;

	const ALLOW_OT_SATURDAY=1;

	const ALLOW_OT_SUNDAY=1;

	const ALLOW_OT_HOLIDAY=1;

	protected $fillable=[
		'otcategory_id',
		'allow_clockin_ot',
		'allow_clockout_ot',
		'threshold',
		'interval_deduction_clockin_ot',
		'interval_deduction_clockin_time',
		'interval_deduction_clockout_ot',
		'interval_deduction_clockout_time',
		'allow_fix_rate',
		'ot_fix_rate',
		'double_ot_fix_rate',
		'week_day_double_ot_start_time',
		'allow_double_ot_saturday',
		'allow_double_ot_sunday',
		'allow_double_ot_holiday',
		'allow_ot_weekday',
		'allow_ot_saturday',
		'allow_ot_sunday',
		'allow_ot_holiday'
	];
    

     public function otcategory()
    {
    	return $this->belongsTo(Otcategory::class);
    }
     	
}
