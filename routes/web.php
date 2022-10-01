<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('layouts.admin');
});

//USER
Route::resource('cars', CarController::class);
