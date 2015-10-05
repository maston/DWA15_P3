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

// routes for Lorem Ipsum Generator
Route::get('/loremipsum/generate', 'LoremIpsum@getGenerate');
Route::post('/loremipsum/generate', 'LoremIpsum@getGenerate');

// routes for Random User Generator
Route::get('/randomuser/generate', 'RandomUser@getGenerate');
Route::post('/randomuser/generate', 'RandomUser@getGenerate');