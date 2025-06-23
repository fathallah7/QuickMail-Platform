<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/signup', [AuthController::class,'showSignupForm'])->name('signup');

Route::get('/login', [AuthController::class,'showLoginForm'])->name('login');


Route::post('/signup', [AuthController::class,'signup'])->name('signupDone');

Route::post('/login', [AuthController::class,'login'])->name('loginDone');


Route::post('/logout', [AuthController::class,'logout'])->name('logout');