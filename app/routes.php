<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
// */

// added routes for home resume and portfolio//
Route::get('/', function(){
    return View::make('temp.my-first-view');
});

Route::get('/resume', function() {
    return 'This is my Resume!';
});

Route::get('/portfolio', function() {
    return 'This is my portfolio!';
});
