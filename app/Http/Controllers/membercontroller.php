<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class membercontroller extends Controller
{
    function savedata(Request $req)
    {
        $member = new member;
        $member->name=$req->name;
        $member->email=$req->email;
        $member->address=$req->address;
        $member->save();
        $req->session()->flash('success','Data Inserted');
        return redirect('members');
    }
    function member()
    {
        $data = member::paginate(5);
        return view('members', ['data'=>$data]);
    }
    function delete($id)
    {
        $data = member::find($id);
        $data->delete();
        session()->flash('delete','Data Deleted');
        return redirect('members');
    }
    function edit($id)
    {
        $data = member::find($id);
        return view('managemember',['member'=>$data]);
    }
    function update(Request $req)
    {
        $data = member::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->address=$req->address;
        $data->save();
        $req->session()->flash('success','Data Updated');
        return redirect('members');
    }
}
