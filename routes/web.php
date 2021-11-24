<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\MechanicsController;
use App\Http\Controllers\VehcileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
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

Route::get('/mechanism',[MechanicsController::class,'mechanicsList'])->name('mechanics.list');
Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/register',[RegisterController::class,'register']);
Route::get('/customer-list',[CustomerController::class,'customerList'])->name('customer.list');
Route::get('/service-list',[ServiceController::class,'serviceList'])->name('service.list');
Route::get('/vehcile',[VehcileController::class,'vehcile']);

Route::post('/register/store',[RegisterController::class,'store'])->name('register.store');
Route::post('/service/store',[ServiceController::class,'store'])->name('service.store');
Route::post('/mechanics/store',[MechanicsController::class,'store'])->name('mechanics.store');
Route::post('/customer/store',[CustomerController::class,'store'])->name('customer.store');
Route::get('/mechanics/service',[ServiceController::class,'serviceList'])->name('service.list');
Route::get('/service/category',[CategoryController::class,'category'])->name('service.category');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');


