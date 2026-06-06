<?php

use App\Http\Controllers\Auth\login;
use App\Http\Controllers\Auth\logout;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\register;


Route::get('/', function () {
    return view('home');
});


Route::middleware('guest')->group(function(){
    Route::view('/register', 'auth.register')->name('register');
    Route::view('/login', 'auth.login')->name('login');
    Route::post('/register', Register::class);
    Route::post('/login', login::class);
});
Route::post('/logout', logout::class)->middleware('auth')->name('logout');






