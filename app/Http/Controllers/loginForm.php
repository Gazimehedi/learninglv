<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginForm extends Controller
{
    function logininfo(Request $req){
        $user = $req->input('user');
        $pwd = $req->input('password');
        $req->file('file')->store('img');
        $req->session()->put('user',$user);
        $req->session()->put('pwd',$pwd);
        session()->flash('msg','login success');
        return redirect('user/Mehedi/45624');
    }
}
