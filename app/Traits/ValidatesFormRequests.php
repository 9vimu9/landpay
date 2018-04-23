<?php 

namespace App\Traits;

use Illuminate\Foundation\Http\FormRequest;

trait ValidatesFormRequests
{

//we use this function when attribute needs to be unique
	public function uniqueVsUpdateSolver(FormRequest $formRequest,$routeName,$commonValidation)
	{
			$object =  $formRequest->route($routeName);
	       	return is_null($object) ? $commonValidation: $commonValidation.','.$object->getKey();
	}




}









 ?>