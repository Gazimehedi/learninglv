<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class aggregateController extends Controller
{
    //
    function show(){
        $sum = DB::table('members')->sum('id');
        $min = DB::table('members')->min('id');
        $max = DB::table('members')->max('id');
        $avg = DB::table('members')->avg('id');
        $total = DB::table('members')->count();
        return view('aggregate',[
            'sum'=>$sum,
            'min'=>$min,
            'max'=>$max,
            'avg'=>$avg,
            'total'=>$total
        ]);
    }
}
