<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function getdata(Request $rq){
        return $rq->input();
    }
}
