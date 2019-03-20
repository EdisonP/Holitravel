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
    if (!Auth::check() || Auth::user()->id !== 1)
            return redirect('/oops');
    return view('internals.addH');
});

Route::get('/bookH', function () {
    if (!Auth::check())
            return redirect('/login');
    return view('internals.bookH');
});

Route::get('/editH', function () {
    if (!Auth::check() || Auth::user()->id !== 1)
            return redirect('/oops');
    return view('internals.editH');
});

Route::get('/viewH', function () {
    if (!Auth::check())
            return redirect('/login');
    return view('internals.viewH');
});

Route::get('/viewUser', function () {
    if (!Auth::check() || Auth::user()->id !== 1)
            return redirect('/oops');
    $userList = DB::table('users')->get();
    return view('internals.viewUser', ['userList' => $userList]);
});

Route::get('/viewUserH', function () {
    if (!Auth::check())
            return redirect('/login');
    return view('internals.viewUserH');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/welcome', function(){
    return view('welcome');
});

Route::get('/oops', function(){
    return view('internals.oops');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
