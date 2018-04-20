<?php

namespace App\Http\Requests;

use App\Employee;
use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
         $employee =  $this->route('employee');
         $employeeId=is_null($employee) ? '': $employee->getKey();


        return [
            'id' => 'numeric|required|unique:employees,id,'.$employeeId,
            'name' => 'required|max:255|unique:employees,name,'.$employeeId,
            'address' => 'required|max:255',
            'address_temperary' => 'max:255',
            'telephone_no_1' => 'required|regex:/^[0-9]{10}$/|unique:employees,telephone_no_1,'.$employeeId,
            'telephone_no_2' => 'regex:/^[0-9]{10}$/',
            'nic'=>'required|regex:/^[0-9]{11}$/|unique:employees,nic,'.$employeeId,
            'dob'=>'date_format:Y-m-d|before:16 years',
            'date_joined'=>'date_format:Y-m-d|before:today',
            'designation_id' => 'numeric|required',
            'sessioncategory_id' => 'numeric|required',
            'otcategory_id' => 'numeric|required',

        ];
    }
}
