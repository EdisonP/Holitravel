<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/addH', function () {
    return view('addH');
});

Route::get('/bookH', function () {
    return view('bookH');
});

Route::get('/editH', function () {
    return view('editH');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/viewH', function () {
    return view('viewH');
});

Route::get('/viewUser', function () {
    return view('viewUser');
});

Route::get('/login', function () {
    return view('login');
});