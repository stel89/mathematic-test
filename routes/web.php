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

Route::get('/', 'MainController@index');
Route::post('/add_country', 'MainController@add_country');
Route::post('/add_language', 'MainController@add_language');
Route::post('/add_town', 'MainController@add_town');
Route::get('/country/{id}', 'MainController@show');
Route::delete('country/{id1}/city/{id2}/delete', 'MainController@destroy');
Route::delete('country/{id}/delete', 'MainController@destroy2');

Route::post('/city/{id}/add_lang', 'TownController@add_lang');
Route::put('/country/{id1}/city/{id2}/update', 'TownController@update');
Route::get('country/{id1}/city/{id2}/edit', 'TownController@show');

Route::get('lists', 'ListController@index');
Route::get('lists/{id}', 'ListController@get_towns');
Route::get('lists/town/{id}', 'ListController@get_lang');
