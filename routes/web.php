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
    return redirect(route('login'));
});

// Route::get('/', 'ClientController@index');
Auth::routes();

Route::get('/admin', 'HomeController@index');
Route::get('/admin/add', 'HomeController@add');
Route::post('/admin/add/tambahken', 'HomeController@tambahken');
Route::get('/admin/{id}/edit', 'HomeController@edit');
Route::post('/admin/{id}/apdetin', 'HomeController@apdet');
Route::get('/admin/{id}/hapus', 'HomeController@hapus');


 Route::get('/admin/userprofile', 'ProfileController@edit');
 Route::patch('/admin/profileupdate', 'ProfileController@update')->name('profile.update');

Route::post('/admin/updoc', 'DocController@upload');
Route::post('/admin/addfoto', 'DocController@foto');

Route::get('/admin/{id}', 'DocController@download');
Route::get('/admin/{id}/dochapus', 'DocController@hapus');

Route::get('/admin/{id}', 'DocController@fotodownload');
Route::get('/admin/{id}/fotohapus', 'DocController@fotohapus');