<?php 

function htmlCellBtnEdit($href,$size)
{
	return '<a href="'.$href.'" class="btn btn-'.$size.' btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
}

function checkBoxValueConverter($checkboxValue,$returnValueForOn='1',$returnValueForOff='0')
{
	return $checkboxValue=='on' ? $returnValueForOn : $returnValueForOff;
}

function mergeCheckboxValuesTORequest($request,$input,$returnValueForOn='1',$returnValueForOff='0')
{
	if ($request->has($input))
	{
		 $request->merge([$input=>$returnValueForOn]);
		 return $request;
	}
	
	$request->merge([$input=>$returnValueForOff]);
	return $request;

}


 