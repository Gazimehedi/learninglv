<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    //show data
    function show()
    {
        $data = DB::table('members')->get();
        return view('list',['lists'=>$data]);
    }
    //pluck method | show out single colum or multiple
    function pluck()
    {
        $data = DB::table('members')->pluck('address','id');
        dd($data);
        return view('list',['lists'=>$data]);
    }
    //chunk method show limited data
    function chunk()
    {
        $data = DB::table('members')->orderBy('id')->chunk(2,function($data){
            echo "chunk data";
            echo '<br>';
            foreach($data as $user){

                echo $user->name;
                echo '<br>';
            }
            return false;
        });
        dd($data);
        return view('list',['lists'=>$data]);
    }
    //insert method
    function create(Request $req)
    {
        DB::table('members')
        ->insert([
            'name'=>$req->name,
            'email'=>$req->email,
            'address'=>$req->address
        ]);
        return redirect('list');

    }
    //insertOrIgnore method
    function insertIgnore()
    {
        $insertOrIgnore = DB::table('members')
        ->insertOrIgnore([
            'id'  =>19,
            'name'=>'nirobb',
            'email'=>'nirob@gmail.com',
            'address'=>'Dhaka'
        ]);
        return dd($insertOrIgnore);

    }
    //insertOrUpdate method
    function insertUpdate()
    {
        $updateorinsert = DB::table('members')->updateOrInsert(
            ['name'=>'jannat'],
            ['email'=>'jannat@rebon.com','address'=>'Borisal']
        );
        dd($updateorinsert);

    }
    function edit($id)
    {
        $data = DB::table('members')->find($id);
        return view('editlist',['item'=>$data]);
    }
    /**
     * @param \Illuminate\Http\Request $req
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    function update(Request $req, $id)
    {
        DB::table('members')
        ->where('id',$id)
        ->update([
            'name'=>$req->name,
            'email'=>$req->email,
            'address'=>$req->address,
        ]);
        return redirect('list');
    }
    //check data exits or not
    function existornot(){
        if($data = DB::table('members')->where('id','10')->doesntExist()){
            dd('not exist');
        }

    }
    function delete($id)
    {
        DB::table('members')
        ->where('id',$id)
        ->delete();
        return redirect('list');
    }
    //All Data Delete Method
    //DB::table('tableName')->truncate();
}

