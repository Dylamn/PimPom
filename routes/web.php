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


// Route for the rent calendar
Route::get('/calendrier', 'CalendarController@index')->name('calendar.index');
Route::get('/calendrier/{month}/{year}', 'CalendarController@index')->name('calendar.show.month');
Route::get('/calendrier/{day}/{month}/{year}/reservations', 'CalendarController@showEvents')->name('calendar.show.day.event');

// Routes for authentification (register page is disabled)
Auth::routes(['register' => false]);

// Route for the application dashboard
Route::get('/home', 'HomeController@index')->name('home');

// Route for the rents of the user connected
Route::middleware('auth:web')->get('/mesReservations', 'UserRentsController@index')->name('myRents');

// Route for the record of the user connected
Route::middleware('auth:web')->get('/mesAnciennesReservations', 'UserRecordController@index')->name('record');

/*
 |--------------------------------------------------------------------------
 | Equipements Routes
 |--------------------------------------------------------------------------
 */

Route::middleware('auth:web')->get('/equipements', 'EquipmentController@index')->name('equipements.index');
Route::middleware('auth:web')->post('/equipements', 'EquipmentController@store')->name('equipements.store');
Route::middleware('auth:web')->get('/equipements/creer', 'EquipmentController@create')->name('equipements.create');
Route::middleware('auth:web')->get('/equipements/{equipment}', 'EquipmentController@show')->name('equipements.show');
Route::middleware('auth:web')->get('/equipements/{equipment}/modifier', 'EquipmentController@edit')->name('equipements.edit');
Route::middleware('auth:web')->patch('/equipements/{equipment}/', 'EquipmentController@update')->name('equipements.update');
Route::middleware('auth:web')->delete('/equipements/{equipment}', 'EquipmentController@destroy')->name('equipements.destroy');

/*
 |--------------------------------------------------------------------------
 | Reservations Routes
 |--------------------------------------------------------------------------
 */

Route::resource('reserver', 'ReserverController');
Route::middleware('auth:web')->get('/reservations', 'ReservationController@index')->name('reservations.index');
Route::middleware('auth:web')->get('/reservations/{rent}', 'ReservationController@edit')->name('reservations.edit');
Route::middleware('auth:web')->delete('/reservations/{rent}', 'ReservationController@destroy')->name('reservations.destroy');
Route::middleware('auth:web')->get('/archive', 'RecordController@index')->name('record.index');

/*
 |--------------------------------------------------------------------------
 | Category Routes
 |--------------------------------------------------------------------------
 */

Route::middleware('auth:web')->get('/categories', 'CategoryController@index')->name('categorie.index');
Route::middleware('auth:web')->post('/categories', 'CategoryController@store')->name('categorie.store');
Route::middleware('auth:web')->get('/categories/creer', 'CategoryController@create')->name('categorie.create');
Route::middleware('auth:web')->get('/categories/{category}/modifier', 'CategoryController@edit')->name('categorie.edit');
Route::middleware('auth:web')->patch('/categories/{category}/', 'CategoryController@update')->name('categorie.update');
Route::middleware('auth:web')->delete('/categories/{category}', 'CategoryController@destroy')->name('categorie.destroy');

/*
 |--------------------------------------------------------------------------
 | Utilisateurs Routes
 |--------------------------------------------------------------------------
 */

Route::middleware('auth:web')->get('/utilisateurs', 'UserController@index')->name('utilisateurs.index');
Route::middleware('auth:web')->post('/utilisateurs', 'UserController@store')->name('utilisateurs.store');
Route::middleware('auth:web')->get('/utilisateurs/creer', 'UserController@create')->name('utilisateurs.create');
Route::middleware('auth:web')->get('/utilisateurs/{user}', 'UserController@show')->name('utilisateurs.show');
Route::middleware('auth:web')->get('/utilisateurs/{user}/modifier', 'UserController@edit')->name('utilisateurs.edit');
Route::middleware('auth:web')->patch('/utilisateurs/{user}/', 'UserController@update')->name('utilisateurs.update');
Route::middleware('auth:web')->delete('/utilisateurs/{user}', 'UserController@destroy')->name('utilisateurs.destroy');
