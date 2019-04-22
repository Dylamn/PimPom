<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/json', function (Request $request) {
    return [
        'answer' => rand(0, 1) === 1 ? 'Yes' : 'No'
    ];
});

Route::get('/equipments', function () {
   // TODO: Create a Controller that return a list of all categories.
    return [
       'comment' => 'No equipments yet.'
   ];
});
