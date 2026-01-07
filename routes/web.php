<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// route view home.blade.php
Route::get('/', function () {
    return view('home');
})->name('home');

// route view dashboard.blade.php
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

// route login.blade.php
Route::get('/login', function () {
    return view('login');
})->name('login');

// route proses login controller AuthController 
Route::post('/login', [AuthController::class,'login']);
Route::post('/logout', [AuthController::class,'logout'])->middleware('auth');
Route::get('/dashboard', function () {
    return view('dashboard' );
})->middleware('auth');

// route register.blade.php
Route::get('/register', function () {
    return view('register');
})->name('register');

// route proses register controller AuthController
Route::post('/register', [AuthController::class,'register']);
