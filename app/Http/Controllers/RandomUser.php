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
        return view('RandomUser.generate');
    }

    // Responds to requests for POST /randomuser/generate
    public function postGenerate(Request $request) {
        // Validate the request data
        $this->validate($request, [
            'num_users' => 'required|integer|min:1|max:25',
        ]);

        $num_to_generate = $request->input('num_users');
        $add_birthday = $request->input('add_birthday');
        $add_profile = $request->input('add_profile');
        $listFakePeople = self::generateFakeList($num_to_generate);

        // return fake users to the view
        return View('RandomUser.generate')
            ->with('fakePeople', $listFakePeople)
            ->with('num_to_generate', $num_to_generate)
            ->with('add_birthday', $add_birthday)
            ->with('add_profile', $add_profile);
    }

// ****************************
// function: generateFakeList
// param: $num_to_generate - number of fake profiles that will be generated
// summary: creates an array of fake user profiles calling the function generateFakePerson()
// returns: the array of profiles
// ****************************
    private function generateFakeList($num_to_generate) {
        // $num_to_generate = $request->input('num_users');
        $listFakePeople = array();

        for ($i=0; $i<$num_to_generate; $i++) {
            $person = self::generateFakePerson();
            array_push($listFakePeople,$person);
        }

        return $listFakePeople;
    }

// ****************************
// function: generateFakePerson
// param: none
// summary: Creates a fake user profile based on the Faker package
// returns: a random fake person. possibly from my past.
// ****************************
    private function generateFakePerson() {
        $faker = Factory::create();

        $personData = array();
            $personData['name'] = $faker->name;
            $personData['dob'] = $faker->dateTimeBetween($startDate='-55 years', $endDate='now')->format('Y-m-d');
            $personData['phone'] = $faker->phoneNumber;
            $personData['profile'] = $faker->paragraph;    
            $personData['city'] = $faker->city;
            $personData['state'] = $faker->state;
            $personData['zip'] = $faker->postcode;

        return $personData;
    }
}
