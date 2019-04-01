<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::post('test','UserController@test');

Route::group(['middleware' => 'auth:api'], function(){
Route::post('details', 'UserController@details');
Route::post('regas_doc', 'DocController@RegisterAsDoc');
Route::post('regas_hos', 'HospitalController@regAsHospital');
Route::post('regas_pat', 'PatientController@regAsPatient');

});