<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function show($name=null, $id=null){
        if(!session()->has('user')){
            return redirect('login');
        }
        return view('user', ['name'=>$name, 'id'=>$id]);
    }
}
