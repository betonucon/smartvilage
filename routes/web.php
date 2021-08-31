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
Route::get('/News', function () {
    return view('News');
});

Auth::routes();

Route::post('/updatewarga', 'RegistrasiController@register');


Route::get('/berita', 'BeritaController@simpan_berita');
Route::get('/Cctv', 'CctvController@index');
Route::get('/NomorPenting', 'NomorpentingController@index');
Route::get('/Sembako', 'SembakoController@index');
Route::get('/Widget', 'WidgetController@index');
Route::get('/cari_desa', 'MasterController@cari_desa');
Route::get('/home', 'HomeController@index')->name('home');
