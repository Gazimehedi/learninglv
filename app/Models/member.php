<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;

    //accessors database
    // function getEmailAttribute($value)
    // {
    //     return ucfirst($value);
    // }
    // function getAddressAttribute($value)
    // {
    //     return $value.',Bangladesh';
    // }

    //Mutator database
    //function setNameAttribute($value){
        //$this->attributes['name']='Mr. '. $value;
        //if isset mr. or !isset
    //     if(preg_match('Mr',$value))){
    //         return $this->attributes['name'] = $value;
    //     }else{
    //         return $this->attributes['name'] = "Mr  ".$value;
    //      }
    // }

    // function setAddressAttribute($value){
    //    return $this->attributes['address']= $value.', Bangladesh';
    // }

    public $timestamps=false;
}
