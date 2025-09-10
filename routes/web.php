<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/hello', function () {
    return 'Hello, World!';
});

Route::get('/helloView', function () {
    $name = 'ahmed';
    return view('hello')->with('name', $name);   
});

// Route::get('/myBooking', [BookingController::class, 'index']);
Route::get('/myBooking', 'App\Http\Controllers\BookingController@myBooking');


// php artisan serve