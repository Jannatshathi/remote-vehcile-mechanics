<?php

use App\Http\Controllers\Api\ServicetypeController;
use App\Http\Controllers\Api\UserController;
use App\Models\Servicetype;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/users',[UserController::class,'index']);
Route::post('/users/create',[UserController::class,'create']);
Route::delete('/users/delete/{id}',[UserController::class, 'delete']);
Route::post('/users/update/{id}',[UserController::class, 'update']);
//servicetype
Route::get('/servicetype',[ServicetypeController::class,'index']);
Route::post('/servicetype/create',[ServicetypeController::class,'create']);
Route::post('/servicetype/update/{id}',[ServicetypeController::class,'update']);
Route::delete('/servicetype/delete/{id}',[ServicetypeController::class,'delete']);