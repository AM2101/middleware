<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::view('home','home');
// Route::view('noaccess', 'noaccess');

//Grouped Route
// Route::group(['middleware'=>['protectPage']],function(){
//     Route::view("users",'users');

// });

//form submit
Route::get('login',[userController::class,'testRequest']);
Route::view('user','form');