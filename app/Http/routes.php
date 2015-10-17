<?php
// use Badcow\LoremIpsum\Generator;
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
// use Faker\Factory;
use Ivory\GoogleMap\Map;
use Ivory\GoogleMap\Helper\MapHelper;

Route::get('/', function () {
    return view('welcome');
});

// routes for Lorem Ipsum Generator
Route::get('/loremipsum/generate', 'LoremIpsum@getGenerate');
Route::post('/loremipsum/generate', 'LoremIpsum@postGenerate');

// routes for Random User Generator
Route::get('/randomuser/generate', 'RandomUser@getGenerate');
Route::post('/randomuser/generate', 'RandomUser@postGenerate');


Route::get('/practice', function () {



$map = new Map();

// Disable the auto zoom flag
$map->setAutoZoom(false);

// Sets the center
$map->setCenter(0, 0, true);

// Sets the zoom
$map->setMapOption('zoom', 3);

$mapHelper = new MapHelper();

echo $mapHelper->renderHtmlContainer($map);

});
