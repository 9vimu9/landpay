<?php 

namespace App\Http\Requests;

use App\Traits\ValidatesFormRequests;
use Illuminate\Foundation\Http\FormRequest;


class Request extends FormRequest
{
	use ValidatesFormRequests;
	
}

 ?>