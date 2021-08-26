<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class joinController extends Controller
{
    //
    function show()
    {
        return DB::table('company')
        ->where('employee.id','=','company.employe_id')
        ->join('employee','company.employe_id','employee.id')
        ->get();
    }
}
