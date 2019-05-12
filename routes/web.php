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
    return view ('front.index');
});
Route::resource('front', 'FrontController');
Route::resource('front.Transaksi', 'TransaksiController');
Route::get('search-front', 'FrontController@search');

Route::group(['middleware' => 'auth'], function(){
Route::resource('data_barang', 'BarangController');
Route::resource('kategori_barang', 'KategoriBarangController');
Route::resource('kategori', 'KategoriController');
Route::resource('login', 'LoginController');
Route::resource('kontak', 'KontakController');




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
Route::resource('data_lengkap', 'DataLengkapController');

Route::get('search', 'BarangController@search');




Route::get('/data_barang/create','BarangController@create');

Route::post('/data_barang/store','BarangController@store');
Route::post('/kategori_barang/store','KategoriBarangController@store');

Route::get('/data_barang/edit/{id}','BarangController@edit');

Route::post('/data_barang/update','BarangController@update');

Route::get('/data_barang/delete/{id}','BarangController@delete');
Route::get('/kategori_barang/delete/{id}','KategoriBarangController@delete');
Route::get('/kategori_barang/edit/{id}','KategoriBarangController@edit');


});








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
