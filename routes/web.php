<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::loginUsingId(1);

//ajax calls
// Route::post('/ajax/select2','Ajax\Select2Controller@select2Server')->name('ajax.select2');
Route::get('/ajax/select2','Ajax\Select2Controller@select2Server')->name('ajax.select2');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('employees','Employee\EmployeeController');  

Route::resource('otcategories','Otcategory\OtcategoryController');    

Route::resource('places','Place\PlaceController');    

Route::resource('devices','Device\DeviceController');    



Route::get('/', 'HomeController@index')->name('home');


