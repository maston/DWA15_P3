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
use Faker\Factory;

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
    	$faker = Factory::create();
        // $name = $faker->name;
        // $dob = $faker->dateTimeBetween($startDate='-55 years', $endDate='now')->format('Y-m-d');
        // $phone = $faker->phoneNumber;
        // $profile = $faker->paragraph;
        // $street = $faker->streetAddress;
        // $city = $faker->city;
        // $state = $faker->state;
        // $zip = $faker->postcode;
        // $lat = $faker->latitude;
        // $long = $faker->longitude;


        $personData = array();
	    	$personData['name'] = $faker->name;
	        $personData['dob'] = $faker->dateTimeBetween($startDate='-55 years', $endDate='now')->format('Y-m-d');
	    	$personData['phone'] = $faker->phoneNumber;
	    	$personData['profile'] = $faker->paragraph;    
	    	// $personData['street'] = $street;
	    	$personData['city'] = $faker->city;
	    	$personData['state'] = $faker->state;
	    	$personData['zip'] = $faker->postcode;
	    	$personData['lat'] = $faker->latitude;
	    	$personData['long'] = $faker->longitude;

	    echo var_dump($personData);


});
