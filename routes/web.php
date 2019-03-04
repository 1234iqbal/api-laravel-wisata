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

Route::get('/wisata', 'wisataController@index');
Route::POST('/wisata/create', 'wisataController@store');
Route::patch('/wisata/{id}', 'wisataController@update');
Route::delete('/wisata/{id}', 'wisataController@delete');
