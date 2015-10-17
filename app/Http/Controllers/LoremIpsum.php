<?php

namespace DevBestFriend\Http\Controllers;

use Illuminate\Http\Request;
use DevBestFriend\Http\Requests;
use DevBestFriend\Http\Controllers\Controller;
use Badcow\LoremIpsum\Generator;

class LoremIpsum extends Controller
{
    // Responds to requests for GET /loremipsum/generate
    public function getGenerate() {
        return view('LoremIpsum.generate');
    }

    // Responds to requests for POST /loremipsum/generate
    public function postGenerate(Request $request) {
        // Validate the request data
        $this->validate($request, [
            'num_paragraph' => 'required',
        ]);

        $generator = new Generator(); 
        $num_paragraph = $request['num_paragraph'];
        $paragraphs = $generator->getParagraphs($num_paragraph);
        // echo implode('<p>', $paragraphs);
        return view('loremipsum.generate')
            ->with('paragraphs', $paragraphs)
            ->with('num_paragraph', $num_paragraph);
    }
}
