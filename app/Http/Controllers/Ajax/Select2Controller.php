<?php

namespace App\Http\Controllers\Ajax;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Select2Controller extends Controller
{




	
	//this function will get All front end responses regarding select2 controller
	//Get
   public function select2Server(Request $request)
   {
       
   		if (method_exists($this, $request->method)) {
   			$results= call_user_func_array([$this,$request->method],[$request->dataArray,$request->term]);
			return response()->json($results);
   		}
   		return \Response::json([]);
   }






//this function returns true if search term empty and record count of givrn table is below 6
   private function showAllForEmptyTermIfTableSmall($term,$table)
   {
   	return empty($term) && DB::table($table)->count()<=5;
   }



//this function returns ids and values of given table and column
   private function singleColumn($dataArray,$term)
   {
   	$table=$dataArray['table'];
   	$column=$dataArray['column'];
   	$results=DB::table($table);

   	if ($this->showAllForEmptyTermIfTableSmall($term,$table)) {
        return  $results->get(['id', $column.' as value']);
      }
   	

   	return $results->where($column,'like',$term.'%')->orWhere($column,'like','%'.$term.'%')
   	->get(['id', $column.' as value']);

   }



}
