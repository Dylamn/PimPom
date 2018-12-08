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

// Default homepage
Route::get('/', function () {
    return view('welcome');
});

// (helper) Routes for authentification
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/reserver', 'ReserverController@getInfos');
Route::post('/reserver', 'ReserverController@postInfos');
