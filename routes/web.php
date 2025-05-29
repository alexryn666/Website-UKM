<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('depan');
});
Route::get('/index', function () {
    return view('depan');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/berita', function () {
    return view('berita');
});
Route::get('/berlangsung', function () {
    return view('berlangsung');
});
Route::get('/terdahulu', function () {
    return view('terdahulu');
});
Route::get('/contact', function () {
    return view('contact');
});


