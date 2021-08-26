<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\company;

class bindingController extends Controller
{
    function binding(company $key)
    {
        return $key;
    }
}
