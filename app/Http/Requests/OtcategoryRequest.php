<?php

namespace App\Http\Requests;
use App\Otcategorystatus;
use Illuminate\Validation\Rule;
use App\Http\Requests\Request;

class OtcategoryRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // return [];


        return [
            'name' => $this->uniqueVsUpdateSolver($this,'otcategory','required|max:255|unique:places,name') ,
            'ot_fix_rate' => 'numeric|required_if:allow_fix_rate,==,on',
            'double_ot_fix_rate' => 'numeric|required_if:allow_fix_rate,==,on',
            'threshold'=>'required|numeric',
            'interval_deduction_clockin_ot'=>'numeric|required_with_all:allow_clockin_ot,interval_deduction_clockin_time',
            'interval_deduction_clockout_ot'=>'numeric|required_with_all:allow_clockout_ot,interval_deduction_clockout_time',
            'interval_deduction_clockin_time'=>'required_with_all:allow_clockin_ot,interval_deduction_clockin_ot',
            'interval_deduction_clockout_time'=>'required_with_all:allow_clockout_ot,interval_deduction_clockout_ot',
            'week_day_double_ot_start_time'=>'date_format:H : i'
        ];   
    }
}
