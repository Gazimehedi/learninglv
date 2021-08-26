<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class accesorController extends Controller
{
    //
    function index(){
        //Accessor code in commend member model
        return member::all();
    }
    function mutator(){
        //Accessor code in commend member model
        $member = new member;
        $member->name='habib';
        $member->email='habib@gmail.com';
        $member->address='koxbazar';
        $member->save();
    }
}
