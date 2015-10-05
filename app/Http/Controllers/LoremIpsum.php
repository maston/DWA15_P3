<?php

namespace DevBestFriend\Http\Controllers;

use Illuminate\Http\Request;
use DevBestFriend\Http\Requests;
use DevBestFriend\Http\Controllers\Controller;

class LoremIpsum extends Controller
{
    // Responds to requests for GET /loremipsum/generate
    public function getGenerate() {
        return view('loremipsum');
    }

    // Responds to requests for POST /loremipsum/generate
    public function postGenerate() {
        return 'Show the LoremIpsum results';
    }
}
