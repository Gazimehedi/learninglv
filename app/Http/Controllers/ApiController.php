<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
   function data(){
       $data = Http::get("https://reqres.in/api/users?page=1");
       return view('data',['collection'=>$data['data']]);
   }
}
