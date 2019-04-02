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
    return ('welcome');
});

Route::resource('data_barang', 'BarangController');

Route::get('layouts',function(){
    return view('layouts.master');
});  
Route::get('dashboard',function(){
    return view('dashboard.index');
});  
Route::get('layouts',function(){
    return view('dashboard');
}); 

Route::resource('data_barang', 'BarangController');

Route::get('search', 'BarangController@search');

Route::get('/data_barang/create','BarangController@create');

Route::post('/data_barang/store','BarangController@store');

Route::get('/data_barang/edit/{id}','BarangController@edit');

Route::post('/data_barang/update','BarangController@update');

Route::get('/data_barang/delete/{id}','BarangController@delete');





