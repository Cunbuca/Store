<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

// viewsDirectRoutes
Route::get('/', function () {
    return view('storeHome');
})->name('goToStoreHome');

Route::get('/about', function () {
    return view('about');
})->name('goToAbout');

// cartActions
Route::post('/cart/add', [
    userController::class, 'addToCart',
])->name('addToCart');