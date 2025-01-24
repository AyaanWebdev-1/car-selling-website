<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\Controller;

use Illuminate\Routing\Controller as RoutingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('Home');

Route::get('/car/search',[CarController::class,'search'])->name('car.search');

Route::resource('car',CarController::class);

Route::get('/signup',[\App\Http\Controllers\Signup::class,'create'])->name('SignUp');

Route::get('/login',[\App\Http\Controllers\Login::class,'login'])->name('Login');

Route::get('/guest',[\App\Http\Controllers\Guest::class,'guest'])->name("");
