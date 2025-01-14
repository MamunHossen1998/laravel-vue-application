<?php

use App\Http\Controllers\Api\AuthenticationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['prefix'=>'v1','middleware' =>['auth:api']],function(){
    // Route::get('/register',[AuthenticationController::class, 'register'])->name('register');
});
Route::group(['prefix'=>'v1'],function(){
    Route::POST('/register',[AuthenticationController::class, 'register'])->name('register');
    Route::POST('/login',[AuthenticationController::class, 'login'])->name('login');
});