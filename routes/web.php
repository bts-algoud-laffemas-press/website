<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\UserController;
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

Route::name('app.')->group(function (){
    Route::get('/login', function () {
        return view('pages.auth.login');
    })->name('login');
    Route::post('/login',[LoginController::class,'authenticate'])->name('authenticate');
    Route::get('/logout',[LoginController::class,'logout']);
});



Route::middleware('auth')->name('dashboard.')->prefix('admin')->group(function (){
    Route::get('/' , function (){
    return view('pages.dashboard.index');
    })->name('index');
    Route::resource('/user',UserController::class);
});



