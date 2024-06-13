<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\validuser;

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

Route::get("/",function(){
    return view('welcome');
})->name('home');

Route::view('register','registeration')->name('register');
Route::post('registerSave',[UserController::class,'register'])->name('registerSave');

Route::view('login','login')->name('login');
Route::post('loginMatch',[UserController::class,'login'])->name('loginMatch');

Route::get('dashboard',[UserController::class,'dashboardPage'])
            ->name('dashboard')
            ->middleware(validuser::class);

Route::get('logout',[UserController::class,'logout'])->name('logout');
