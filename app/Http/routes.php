<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('vendita', function () {
	return view('vendita');
});	
	
Route::get('service', function () {
	return view('service');
});	

Route::get('ricambi', function () {
	return view('ricambi');
});

Route::get('personale', function () {
	return view('personale');
});