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
        $test = self::generateFakeList($request);
        echo $test;
    }

    private function generateFakeList(Request $request) {
        $num_to_generate = $request->input('num_users');
        $test = '';

        for ($i=0; $i<$num_to_generate; $i++) {
            $test = $test.'generated '.$i.'<br>';
        }

        return $test;
    }

    private function generateFakePerson(Request $request) {
        $faker = Factory::create();

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

        return $personData;
    }
}
