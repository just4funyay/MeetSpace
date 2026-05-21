<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.auth.login');
})->name('login');

Route::get('/register', function() {
    return view('pages.auth.register');
})->name('register');

Route::post('/register', function () {
    // Handle registration logic here
    return redirect('register');
});