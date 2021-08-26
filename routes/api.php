<?php

use App\Http\Controllers\dummyApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
 Route::get('/data',[dummyApiController::class,'dummyApi']);
 //get api get data from database
 Route::get('/listdata/{id?}',[dummyApiController::class,'list']);
 //post api add data into database
 Route::post('/add',[dummyApiController::class,'add']);
 //put api update data into database
 Route::put('/update',[dummyApiController::class,'update']);
 //delete api delete data into database
 Route::delete('/delete/{id}',[dummyApiController::class,'delete']);
 //search api search data into database
 Route::get('/search/{name}',[dummyApiController::class,'search']);
 //validator api validate and insert data into database
 Route::post('/validate',[dummyApiController::class,'test']);
