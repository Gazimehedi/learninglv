<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Mail\samplemail;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DbController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\routemanage;
use App\Http\Controllers\loginForm;
use App\Http\Controllers\membercontroller;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\aggregateController;
use App\Http\Controllers\joinController;
use App\Http\Controllers\accesorController;
use App\Http\Controllers\relationController;
use App\Http\Controllers\bindingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//$info = "lets write fluent str";
// $info = Str::ucFirst($info);
// $info = Str::replace('Lets','HI',$info);
// $info = Str::camel($info);

//fluent method
// $info = Str::of($info)->ucFirst($info)->replace('Lets','HI',$info)->camel($info);
// echo $info;
Route::get('/', function () {
    return view('welcome');
});
Route::get("user/{name?}/{id?}",[UserController::class,'show'])->where(['name'=>'[a-zA-Z]+','id'=>'[0-9]+']);
Route::post('users',[UsersController::class,'getdata']);
Route::view('logi','users')->middleware('agecheck');
Route::group(['middleware'=>['checkage']], function(){
    Route::view('home','home');
});

Route::view('noaccess','noaccess');
Route::get('db',[DbController::class,'db']);
Route::get('userinfo',[ApiController::class,'data'])->middleware('agecheck');
Route::get('contact',[routemanage::class, 'contact']);
Route::get('about',[routemanage::class, 'about']);
Route::get('from',[routemanage::class, 'from']);
Route::group(['middleware'=>['checking']], function(){
    Route::get('userinfo',[ApiController::class,'data']);
});
Route::get('/login', function (){
    if(session()->has('user')){
        return redirect('user');
    }
    return view('login');
});
Route::post('/submit', [loginForm::class,'logininfo']);
Route::get('/logout', function(){
    if(session()->has('user')){
        session()->pull('user', null);
        session()->pull('pwd', null);
    }
    return redirect('login');
});

Route::get('/profile/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('profile');
});
Route::view('add','addmember');
Route::post('add',[membercontroller::class, 'savedata']);
Route::view('/adduser','adduser');
Route::post('/adduser',[DbController::class, 'savedata']);
Route::get('/members',[membercontroller::class, 'member']);
Route::get('/deletemember/{id}',[membercontroller::class, 'delete']);
Route::get('/managemember/{id}',[membercontroller::class, 'edit']);
Route::post('/update',[membercontroller::class, 'update']);

//Laravel Create/Read/Edit/Update/Delete;
Route::view('/additem','addList');
Route::post('/additem',[CrudController::class,'create']);
Route::get('/list',[CrudController::class, 'show']);
Route::get('/edititem/{id}',[CrudController::class, 'edit'])->name('edit');
Route::put('/edititem/{id}',[CrudController::class, 'update'])->name('update');
Route::get('/deleteitem/{id}',[CrudController::class, 'delete']);
Route::get('/insertorignore',[CrudController::class, 'insertIgnore']);
Route::get('/updateorinsert',[CrudController::class, 'insertUpdate']);
Route::get('/pluck',[CrudController::class, 'pluck']);
Route::get('/chunk',[CrudController::class, 'chunk']);
Route::get('/existornot',[CrudController::class, 'existornot']);

//Aggregator
Route::get('/aggregate',[aggregateController::class,'show']);


//database table join query;
Route::get('/joindata',[joinController::class,'show']);
//database accesors;
Route::get('/accesor',[accesorController::class,'index']);
//database mutator;
Route::get('/mutator',[accesorController::class,'mutator']);
//database table one to one relation;
Route::get('/relation',[relationController::class,'relation']);
//route model binding for get data into database;
Route::get('/binding/{key}',[bindingController::class,'binding'])->name('binding');
//markdown email template;
Route::get('/markdown', function(){
    return new samplemail;
})->name('markdown');

