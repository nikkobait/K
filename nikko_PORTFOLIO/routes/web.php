<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
#return view('home');
    #return view('resources/views/authentication/bl');
#});
#Route::get('/admin/login', function () {
  #  return view('authentication.login');
#});

Route::get('/', function () {
    return view('authentication.login');
});

route::get('register',[AuthController::class,'showRegister'])->name('register.form');
route::post('register',[AuthController::class,'register'])->name("register");

route::get('login',[AuthController::class,'showLogin'])->name('login.form');
route::post('login',[AuthController::class,'login'])->name('login.form');

Route::get('dashboard',function(){
  return view('dashboard');
})->middleware('auth')->name('dashboard');