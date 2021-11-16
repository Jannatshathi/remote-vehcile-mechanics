<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\MechanicsController;
use App\Http\Controllers\VehcileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
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
// Route::get('/', function () {
//     return redirect()->route('pages');
// });


    Route::get('/pages', function () {
        return view('pages.home');
    })->name('pages');
Route::get('/', function () {
    return view('master');

});

Route::get('/admin',[AdminController::class,'admin']);

Route::get('/mechanism',[MechanicsController::class,'mechanics'])->name('mechanics');
Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/register',[RegisterController::class,'register']);
Route::get('/user',[UserController::class,'user']);
Route::get('/service',[ServiceController::class,'service']);
Route::get('/vehcile',[VehcileController::class,'vehcile']);

Route::post('/register/store',[RegisterController::class,'store'])->name('register.store');


