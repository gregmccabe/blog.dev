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
// Route::get('/', function(){
//     //view is an object, make is a static method. temp. is a folder
//     return View::make('temp.my-first-view');
// });

// Route::get('/resume', function() {
//     return 'This is my Resume!';
// });

// Route::get('/portfolio', function() {
//     return 'This is my portfolio!';
// });

// Route::get('/sayhello/{name}', function($name)
// {
//     if ($name == "Chris")
//     {
//         return Redirect::to('/');
//     }
//     else
//     {
//         $data = array(
//             'name' => $name
//             );

//         return View::make('temp.my-first-view')->with('name', $name);
//     }
// });

// Modify the route to take in a parameter named guess. Someone will access the route by visiting http://blog.dev/rolldice/1, where 1 is their guess.

Route::get('/rolldice/{guess}', function($guess) {
    $rand = mt_rand(1,6);

    $data = array(
        'random_number' => $rand,
        'guess' => $guess
        );

    return View::make('roll-dice')->with($data);
});


