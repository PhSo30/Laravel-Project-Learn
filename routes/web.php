<?php

use App\Http\Controllers\Auth\login;
use App\Http\Controllers\Auth\logout;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\register;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'index']);

Route::middleware('guest')->group(function(){
    Route::view('/register', 'auth.register')->name('register');
    Route::view('/login', 'auth.login')->name('login');
    Route::post('/register', Register::class);
    Route::post('/login', login::class);
});
Route::middleware('auth')->group(function(){
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
});

Route::post('/logout', logout::class)->middleware('auth')->name('logout');






