<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MechanicsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
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
// Route::get('/', function () {
//     return redirect()->route('pages');
// });


    Route::get('/pages', function () {
        return view('admin.pages.home');
    })->name('admin.pages');
Route::get('/', function () {
    return view('master');

});

Route::get('/admin',[AdminController::class,'admin']);

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/customer-list',[CustomerController::class,'customerList'])->name('admin.customer.list');
Route::get('/mechanics',[MechanicsController::class,'mechanicsList'])->name('admin.mechanics.list');
Route::get('/service-list',[ServiceController::class,'serviceList'])->name('admin.service.list');
Route::get('/service/category',[CategoryController::class,'category'])->name('admin.service.category');

Route::get('/vehcile',[VehcileController::class,'admin.vehcile']);

Route::post('/customer/store',[CustomerController::class,'store'])->name('admin.customer.store');
Route::post('/mechanics/store',[MechanicsController::class,'store'])->name('admin.mechanics.store');
Route::post('/service/store',[ServiceController::class,'store'])->name('admin.service.store');
Route::post('/category/store',[CategoryController::class,'store'])->name('admin.category.store');

// Route::get('/mechanics/service',[ServiceController::class,'serviceList'])->name('admin.service.list');



