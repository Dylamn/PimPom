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
})->name('acceuil');

// Set all Routes for equipements
Route::resource('equipements', 'EquipementController');

// (helper) Routes for authentification
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
 |--------------------------------------------------------------------------
 | Reservations Routes
 |--------------------------------------------------------------------------
 */
Route::get('/reserver', 'ReserverController@index')->name('reserver.index');
Route::post('/reserver', 'ReserverController@store')->name('reserver.store');



