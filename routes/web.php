<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MechanicsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VehcileController;
use App\Http\Controllers\DepositeController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\Service_typeController;
use App\Http\Controllers\HomewebController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;

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

// Route::get('/', function () {
//     return view('master');
// });

    // website

    Route::get('/', function () {
            return redirect()->route('webhome');
        });
    Route::get('/website',function(){
        return view('website.master');
    })->name('webhome');

    Route::get('/website/home',[HomewebController::class,'webhome'])->name('webhome');
    Route::get('/user/registration',[LoginController::class,'registration'])->name('user.registration');
    Route::post('/user/registration',[LoginController::class,'registrationPost'])->name('user.post.registration');

    Route::post('/user/do/login',[LoginController::class,'doLogin'])->name('user.do.login');
    Route::get('/admin/user/list',[UserController::class,'userList'])->name('admin.user.list');
    Route::get('/user/logout',[LoginController::class,'logout'])->name('user.logout');

//login
Route::get('/login',[LoginController::class,'login'])->name('website.login');


//register
Route::get('/register',[LoginController::class,'register'])->name('website.register');
Route::post('/register/store',[LoginController::class,'store'])->name('website.register.store');



//Route::get('/admin',[AdminController::class,'admin']);

Route::get('/admin',[HomeController::class,'home'])->name('home');

//customer
Route::get('/customer-list',[CustomerController::class,'customerList'])->name('admin.customer.list');
Route::get('/customer-form',[CustomerController::class,'customerform'])->name('admin.customer.form');
Route::post('/customer/store',[CustomerController::class,'store'])->name('admin.customer.store');



Route::get('/customer',[CustomerController::class,'customer'])->name('website.customer');

//mechanics
Route::get('/mechanics',[MechanicsController::class,'mechanicsList'])->name('admin.mechanics.list');
Route::post('/mechanics/store',[MechanicsController::class,'store'])->name('admin.mechanics.store');

//service
Route::get('/service-list',[ServiceController::class,'servicelist'])->name('admin.service.list');
Route::get('/service-form',[ServiceController::class,'serviceform'])->name('admin.service.form');
Route::post('/service/store',[ServiceController::class,'store'])->name('admin.service.store');

//category
Route::get('/service/category',[CategoryController::class,'category'])->name('admin.service.category');
Route::post('/category/store',[CategoryController::class,'store'])->name('admin.category.store');

//servicetype
Route::get('/service-type',[Service_typeController::class,'servicetype'])->name('admin.service.type');
Route::post('/servicetype/store',[Service_typeController::class,'store'])->name('admin.service.type.store');
Route::get('/servicetype',[Service_typeController::class,'servicetypelist'])->name('admin.service.type');
Route::get('/service/list',[Service_typeController::class,'serviceList'])->name('website.service.list');

//request
Route::get('/request/list',[RequestController::class,'requestList'])->name('admin.request.list');
Route::post('/request/store',[RequestController::class,'store'])->name('admin.request.store');
Route::get('/request',[RequestController::class,'request'])->name('admin.request');
Route::get('/request/status/update/{id}',[RequestController::class,'viewRequest'])->name('admin.view.request');
Route::put('/request/update/{id}',[RequestController::class,'updateRequest'])->name('admin.update.request');
 
//deposite
Route::get('/deposite',[DepositeController::class,'deposite'])->name('admin.deposite');

//vehcile
Route::get('/vehcile',[VehcileController::class,'vehcile'])->name ('admin.vehcile');

//report
Route::get('/report',[ReportController::class,'report'])->name('admin.report');





