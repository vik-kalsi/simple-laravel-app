<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', [AboutController::class, "OpenAboutPage"]);


Route::get('/services', function () {
    return view('pages.services');
});


Route::get('/contact', function () {
    return view('pages.contact');
});

