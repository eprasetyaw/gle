<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function() {
    return view('front/home');
});

Route::get('/about', function() {
    return view('front/about');
});

Route::get('/contact', function() {
    return view('front/contact');
});

Route::get('/program', function() {
    return view('front/program');
});

Route::get('/photo', function() {
    return view('front/photo');
});

Route::get('/video', function() {
    return view('front/video');
});