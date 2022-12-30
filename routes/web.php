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

Route::get('/askingstone/askingstone', 'layoutController@askingstone'); 
Route::get('/ayunanlaut/ayunanlaut', 'layoutController@ayunanlaut'); 
Route::get('/bangkutaman/bangkutaman', 'layoutController@bangkutaman');
Route::get('/batualif/batualif', 'layoutController@batualif'); 
Route::get('/bbq/bbq', 'layoutController@bbq'); 
Route::get('/batujembatanterputus/batujembatanterputus', 'layoutController@batujembatanterputus'); 
Route::get('/homestay/homestay', 'layoutController@homestay'); 
Route::get('/kerangkapaus/kerangkapaus', 'layoutController@kerangkapaus'); 
Route::get('/pondokhijau/pondokhijau', 'layoutController@pondokhijau'); 
Route::get('/tamankayu/tamankayu', 'layoutController@tamankayu'); 
Route::get('/batubersantai/batubersantai', 'layoutController@batubersantai');
Route::get('/batupenyuraksasa/batupenyuraksasa', 'layoutController@batupenyuraksasa');