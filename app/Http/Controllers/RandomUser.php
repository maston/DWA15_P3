<?php

namespace DevBestFriend\Http\Controllers;

use Illuminate\Http\Request;
use DevBestFriend\Http\Requests;
use DevBestFriend\Http\Controllers\Controller;

use Faker\Factory;

class RandomUser extends Controller
{
     // Responds to requests for GET /randomuser/generate
    public function getGenerate() {
        return view('randomuser.generate');
    }

    // Responds to requests for POST /randomuser/generate
    public function postGenerate(Request $request) {
    	$faker = Factory::create();
    	echo $faker->name; 
        // return 'Show the Random User results';
    }
}
