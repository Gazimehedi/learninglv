<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class routemanage extends Controller
{
    function contact(){
        return view('contact');
    }

    function about(){
        return view('about');
    }

    function from(){
        echo 'this is from page';
    }
}
