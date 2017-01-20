<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});





Route::group(['middleware' => 'web'], function(){
    Route::resource('flyers', 'FlyerController');
});

Route::get('{zip}/{street}', 'FlyerController@show');