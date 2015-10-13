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
    public function postGenerate() {
        $generator = new Generator();
        $num_paragraph = $_POST['num_paragraph'];
        $paragraphs = $generator->getParagraphs($num_paragraph);
        // echo implode('<p>', $paragraphs);
        return view('loremipsum.results')
            ->with('paragraphs', $paragraphs)
            ->with('num_paragraph', $num_paragraph);
    }
}
