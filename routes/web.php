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

Route::get('/home', function () {
    return view('vendors.home');
});



Route::group(['middleware' => 'rolecheck:0'],function(){
	///Super Admin Routes
	Route::resource('orgs', 'MakeOrgController');
});


Route::group(['middleware' => 'role:1'],function(){
	///ORG Routes
	


});




Route::group(['middleware' => 'role:2'],function(){
	///Vendor Routes
	


});



Route::group(['middleware' => 'role:3'],function(){
	///User Routes
	


});


Auth::routes();

