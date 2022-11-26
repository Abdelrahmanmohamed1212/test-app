<?php

use App\Http\Controllers\FirstController;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome')->with('welcome','welcome to first heading');
});

Route::get('/test1', function () {
    return 'This Is Test One';
})->name('t1');

Route::get('/test2/{id}', function ($id) {
    return $id;
})->name('t2');


// get class from controller

Route::get('first',[FirstController::class,'ShowString']);

// get class from controller with authentication

//Route::get('first',[FirstController::class,'ShowString'])->middleware('auth');


//route group with middleware

//Route::group(['middleware'=>'auth'],function (){
//    Route::get('users',[FirstController::class,'index']);
//});


Route::resource('news',NewsController::class);


Route::get('index',[UserController::class,'GetIndex']);

//routing to landing page

Route::get('landing',function(){
    return view('landing');
});


//routing to about page

Route::get('about',function (){
    return view('about');
});

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')-> middleware('verified');
