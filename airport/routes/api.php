<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/airport','Api\AirportController@index')->name('api.airport.index');

Route::get('/compagnia','Api\CompagniaController@index')->name('api.compagnia.index');

Route::get('/tratte/search/{voloAndata}/{voloRitorno}', 'Api\TratteController@search')->name('api.tratte.search');

Route::get('/tratte','Api\TratteController@index')->name('api.tratte.index');
