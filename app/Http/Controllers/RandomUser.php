<?php

namespace DevBestFriend\Http\Controllers;

use Illuminate\Http\Request;
use DevBestFriend\Http\Requests;
use DevBestFriend\Http\Controllers\Controller;

class RandomUser extends Controller
{
     // Responds to requests for GET /randomuser/generate
    public function getGenerate() {
        return view('randomuser');
    }

    // Responds to requests for POST /randomuser/generate
    public function postGenerate() {
        return 'Show the Random User results';
    }
}
