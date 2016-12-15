<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class PagesController extends Controller
{

    public function home() {

        $agent = new Agent();

        return view('pages.home', compact('agent'));
    }

    public function getContent(){

        $content = file_get_contents('./content/content.json', true);

        return json_decode($content, true);
    }
}
