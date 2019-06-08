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

Route::get('/', 'SiswaController@index');
Route::post('/import_excel', 'SiswaController@import_excel');

Route::get('/nilai', 'PAIController@index');
Route::post('/nilai/import_excel', 'PAIController@import_excel');
