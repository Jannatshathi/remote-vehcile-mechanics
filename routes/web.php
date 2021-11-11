<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MechanicsController;
use App\Http\Controllers\VehcileController;

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
    return view('master');

});

Route::get('/admin',[AdminController::class,'admin']);
Route::get('/user',[UserController::class,'User']);
Route::get('/mechanics',[MechanicsController::class,'mechanics']);
Route::get('/home',[HomeController::class,'home']);



