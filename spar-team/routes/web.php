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

Auth::routes();

// Routes UserController
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'UserController@index')->name('users');
Route::get('/user/avatar/{filename}', 'UserController@getImage')->name('user.avatar');
Route::get('/config', 'UserController@config')->name('config');
Route::post('user/update', 'UserController@update')->name('user.update');

// Routes ShopsController
Route::get('/shops', 'SparController@index')->name('shops');
Route::get('/shops/create', 'SparController@create')->name('shops.create');
Route::post('shops/store', 'SparController@store')->name('shops.store');
Route::get('/shops/edit/{id}', 'SparController@edit')->name('shops.edit');
Route::post('/shops/update/{id}', 'SparController@update')->name('shops.update');
Route::get('/shops/delete/{id}', 'SparController@delete')->name('shops.delete');

// Route::resource('/shops', 'ShopController');

// Catman Routes
Route::get('/catman', 'CatmanController@index')->name('catman.index');
Route::resource('/catman', 'CatmanController');
