<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class relationController extends Controller
{
    function relation(){
        return employee::find(1)->companyData;
    }
}
