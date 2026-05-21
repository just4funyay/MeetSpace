<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('guest')->group(function () {
    // Register routes
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

    // Login Routes (Authentication)
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
});


Route::middleware('auth')->group(function () {
    // Temporary home route
    Route::get('/home', function(){
        return view('layouts.participant');
    })->name('home');

    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
});