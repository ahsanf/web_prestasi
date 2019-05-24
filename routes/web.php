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

Route::get('/prestasi','prestasiController@index');
Route::post('/prestasi/create','prestasiController@create');
Route::get('/prestasi/{id}/edit','prestasiController@edit');
Route::post('/prestasi/{id}/update','prestasiController@update');
Route::get('/prestasi/{id}/delete','prestasiController@delete');