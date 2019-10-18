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
    return view('homepage');
})->name('homepage');

Route::resource('infolayanan', 'InfolayananController');

Route::resource('service', 'ServiceController');

Route::resource('lapor', 'LaporController');


// Route::get('/', function () {
//     return view('admin.templates.default');
// });

// Route::get('/user', function () {
//     return view('admin.users.index');
// });

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
