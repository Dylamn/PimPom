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

// Routes for authentification (register page is disabled)
Auth::routes(['register' => false]);

// Route for the application dashboard
Route::get('/home', 'HomeController@index')->name('home');

/*
 |--------------------------------------------------------------------------
 | Equipements Routes
 |--------------------------------------------------------------------------
 */

Route::middleware('auth:web')->get('/equipements', 'EquipmentController@index')->name('equipements.index');
Route::middleware('auth:web')->post('/equipements', 'EquipmentController@store')->name('equipements.store');
Route::middleware('auth:web')->get('/equipements/creer', 'EquipmentController@create')->name('equipements.create');
Route::middleware('auth:web')->get('/equipements/{equipement}', 'EquipmentController@show')->name('equipements.show');
Route::middleware('auth:web')->get('/equipements/{equipement}/modifier', 'EquipmentController@edit')->name('equipements.edit');
Route::middleware('auth:web')->patch('/equipements/{equipement}/', 'EquipmentController@update')->name('equipements.update');
Route::middleware('auth:web')->delete('/equipements/{equipement}', 'EquipmentController@destroy')->name('equipements.destroy');

/*
 |--------------------------------------------------------------------------
 | Reservations Routes
 |--------------------------------------------------------------------------
 */
Route::resource('reserver', 'ReserverController');
Route::middleware('auth:web')->get('/reservation', 'ReservationController@index')->name('reservation.index');
/*
 |--------------------------------------------------------------------------
 | Categorie Routes
 |--------------------------------------------------------------------------
 */

Route::middleware('auth:web')->get('/categories', 'CategorieController@index')->name('categorie.index');
Route::middleware('auth:web')->post('/categories', 'CategorieController@store')->name('categorie.store');
Route::middleware('auth:web')->get('/categories/creer', 'CategorieController@create')->name('categorie.create');
Route::middleware('auth:web')->get('/categories/{categorie}/modifier', 'CategorieController@edit')->name('categorie.edit');
Route::middleware('auth:web')->patch('/categories/{categorie}/', 'CategorieController@update')->name('categorie.update');

/*
 |--------------------------------------------------------------------------
 | Utilisateurs Routes
 |--------------------------------------------------------------------------
 */
Route::middleware('auth:web')->get('/utilisateurs', 'UserController@index')->name('utilisateurs.index');
Route::middleware('auth:web')->post('/utilisateurs', 'UserController@store')->name('utilisateurs.store');
Route::middleware('auth:web')->get('/utilisateurs/creer', 'UserController@create')->name('utilisateurs.create');
Route::middleware('auth:web')->get('/utilisateurs/{utilisateur}', 'UserController@show')->name('utilisateurs.show');
Route::middleware('auth:web')->get('/utilisateurs/{utilisateur}/modifier', 'UserController@edit')->name('utilisateurs.edit');
Route::middleware('auth:web')->patch('/utilisateurs/{utilisateur}/', 'UserController@update')->name('utilisateurs.update');
Route::middleware('auth:web')->delete('/utilisateurs/{utilisateur}', 'UserController@destroy')->name('utilisateurs.destroy');
