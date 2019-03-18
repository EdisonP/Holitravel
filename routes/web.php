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
    return view('internals.addH');
});

Route::get('/bookH', function () {
    return view('internals.bookH');
});

Route::get('/editH', function () {
    return view('internals.editH');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/viewH', function () {
    return view('internals.viewH');
});

Route::get('/viewUser', function () {
    $userList = DB::table('users')->get();

    return view('internals.viewUser', ['userList' => $userList]);
});

Route::get('/viewUserH', function () {
    return view('internals.viewUserH');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/welcome', function(){
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
