<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getContent(){

        $content = file_get_contents('./content/content.json', true);

        return json_decode($content, true);
    }
}
