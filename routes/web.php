<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::get('/', function () {
    return view('storeHome');
})->name('goToStoreHome');

Route::get('/about', function () {
    return view('about');
})->name('goToAbout');

//Route::get("")
