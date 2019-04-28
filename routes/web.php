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
})->middleware('auth');

Route::get('/bookH', function () {
    if (!Auth::check())
            return redirect('/login');
    return view('internals.bookH');
})->middleware('auth');

Route::get('/editH', function () {
    if (!Auth::check() || Auth::user()->id !== 1)
            return redirect('/oops');
    return view('internals.editH');
})->middleware('auth');

Route::get('/viewHList', 'HolidayController@index')->middleware('auth');

Route::get('/viewUserList', 'UserController@index')->middleware('auth');

Route::get('/viewUserH', 'HolidayController@userIndex')->middleware('auth'); 


Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/oops', function(){
    return view('internals.oops');
});

Auth::routes();

Auth::routes(['reset' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::resources([
    'users' => 'UserController',
    'holidays' => 'HolidayController'
]);
