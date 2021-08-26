<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;
use Validator;
class dummyApiController extends Controller
{
    function dummyApi()
    {
        return [
            ['id'=>'1',
            'name'=>'Gazi Mehedi Hasan',
            'email'=>'gazimehedihasan@gmail.com',
            'address'=>'kayempur'],
            ['id'=>'2',
            'name'=>'DJ',
            'email'=>'dj@gmail.com',
            'address'=>'kayempur']
        ];
    }
    function list($id=null)
    {
        return $id?member::find($id):member::all();
    }
    function add(Request $req)
    {
        $member = new member;
        $member->name=$req->name;
        $member->email=$req->email;
        $member->address=$req->address;
        $result = $member->save();
        if($result){
            return ['result'=>'Data has been Inserted'];
        }else{
            return ['result'=>'Data Insert feild'];
        }

    }
    function update(Request $req)
    {
        $member = member::find($req->id);
        $member->email=$req->email;
        $result = $member->save();
        if($result){
            return ['result'=>'Data has been Updated'];
        }else{
            return ['result'=>'Data update feild'];
        }

    }
    function delete($id)
    {
        $member = member::find($id);
        $result = $member->delete();
        if($result){
            return ['result'=>'Data has been Deleted'];
        }else{
            return ['result'=>'Data delete feild'];
        }

    }
    function search($name)
    {
        $member = member::where("name","like","%".$name."%")->get();
        if($member!="[]"){
            return $member;
        }else{
            return ['result'=>'Data delete feild'];
        }

    }
    function test(Request $req)
    {
        $rules = array(
            "name"=>"required",
            "email"=>"required",
            "address"=>"required"
        );
        $validator = Validator::make($req->all(),$rules);
        if($validator->fails()){
            return Response($validator->errors(),401);
        }else{
            $member = new member;
            $member->name=$req->name;
            $member->email=$req->email;
            $member->address=$req->address;
            $result = $member->save();
            if($result){
                return ['result'=>'Data has been Inserted'];
            }else{
                return ['result'=>'Data Insert feild'];
            }
        }

    }

}
