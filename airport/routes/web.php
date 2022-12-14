<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/airports', "AereoportoController@index")->name("airports.index");
Route::get('/compagnie', "CompagniaController@index")->name("compagnie.index");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
