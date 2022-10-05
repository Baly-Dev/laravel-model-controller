<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteManager extends Controller
{
    // home view
    public function home(){
        return view('home');
    }

    // about us view
    public function about_us(){
        return view('about_us');
    }
}
