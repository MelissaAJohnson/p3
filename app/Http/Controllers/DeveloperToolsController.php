<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DeveloperToolsController extends Controller
{

    /** Responds to requests to POST /text */
    public function postIndex() { 
        $generator = new \Badcow\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs(\Input::get("numberParagraphs"));;
        return view('text.index')->with("paragraphs", $paragraphs);
    }
}
