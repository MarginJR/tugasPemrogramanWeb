<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/profiles', \App\Http\Controllers\ProfileController::class);
