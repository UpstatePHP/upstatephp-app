<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home()
    {
        $sections = [
            'banner',
            'about',
            'map',
        ];

        return view('home', compact('sections'));
    }
}
