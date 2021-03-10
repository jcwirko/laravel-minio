<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('layouts.admin');
});

Route::get('home', [HomeController::class, 'index'])->name('home');

//USER
Route::resource('users', UserController::class);

//USER
Route::resource('products', ProductController::class);

require __DIR__.'/auth.php';