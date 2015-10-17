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
            'num_paragraph' => 'required|integer|min:1|max:25',
        ]);

        $generator = new Generator(); 
        $num_paragraph = $request['num_paragraph'];
        $paragraphs = $generator->getParagraphs($num_paragraph);
        
        // return generated paragraphs to the view
        return view('loremipsum.generate')
            ->with('paragraphs', $paragraphs)
            ->with('num_paragraph', $num_paragraph);
    }
}
