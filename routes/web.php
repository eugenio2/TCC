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
    return view('welcome');
});
Route::get('/perfil', function () {
    return view('perfil');
});
Route::get('/republicas', function () {
    return view('republicas');
});
Route::get('/lacasa', function () {
    return view('homeLaCasa');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
