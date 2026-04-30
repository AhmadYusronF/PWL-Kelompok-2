<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get(
    '/blog',
    [BlogController::class, 'Blog']
);

Route::get('/contact', function () {
    return view('contact');
});
