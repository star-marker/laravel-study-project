<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/interests', function () {
    return view('interests');
});

Route::get('/study', function () {
    return view('study');
});


Route::get('/test', function () {
    return view('test');
});

Route::get('/form', [\App\Http\Controllers\ContactController::class, 'form']);

