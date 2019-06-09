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



Route::get('/pai', 'PAIController@index');
Route::get('/pai/export_excel', 'PAIController@export_excel');
Route::post('/pai/import_excel', 'PAIController@import_excel');
