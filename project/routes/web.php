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

Route::get('/', 'HenkatenController@index');
Route::get('/reload', 'HenkatenController@reload');
Route::get('/reloadA', 'HenkatenController@reloadA');
Route::get('/reloadB', 'HenkatenController@reloadB');
Route::get('/reloadC', 'HenkatenController@reloadC');
Route::get('/reloadD', 'HenkatenController@reloadD');
Route::get('/reload2', 'HenkatenController@reload2');
Route::get('/reload3', 'HenkatenController@reload3');
Route::get('/reload4', 'HenkatenController@reload4');
Route::get('/reload5', 'HenkatenController@reload5');
Route::get('/reload6', 'HenkatenController@reload6');

