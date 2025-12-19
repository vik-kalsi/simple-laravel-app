<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', [AboutController::class, "OpenAboutPage"]);


Route::get('/services', [ServiceController::class, "OpenServicePage"]);


Route::get('/contact', [ContactController::class, "OpenContactPage"]);

