<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DbController extends Controller
{
    function db(){
        return User::all();
    }
    function savedata(Request $req)
    {
        $user = new User;
        $user->username=$req->username;
        $user->password=$req->password;
        $user->added_on= date('Y-m-d h:i:s');
        $user->save();
        $req->session()->flash('success','Data Inserted');
        return redirect('adduser');
    }
}
