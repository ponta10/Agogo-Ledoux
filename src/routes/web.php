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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'as' => 'admin'], function () {
    Route::get('/', 'AdminController@index');
    Route::group(['prefix' => 'product', 'as' => '.product'], function () {
        Route::get('/', 'ProductController@index');
        Route::post('/store', 'ProductController@store')->name('.store');
        Route::get('/destroy/{id}', 'ProductController@destroy')->name('.destroy');
        Route::get('/restore/{id}', 'ProductController@restore')->name('.restore');
        Route::get('/delete/{id}', 'ProductController@delete')->name('.delete');
        Route::get('/show/{id}', 'ProductController@show')->name('.show');
        Route::put('/edit/{id}', 'ProductController@edit')->name('.edit');
        Route::get('/search', 'ProductController@search')->name('.search');
        Route::get('/sort', 'ProductController@sort')->name('.sort');
    });
    Route::get('/userList', 'AdminController@userList')->name('.userList');
    Route::get('/setting', 'AdminController@setting')->name('.setting');  //ルート名「product.show」
});

Route::group(['prefix' => 'user', 'as' => 'user'], function(){
    Route::get('/', 'UserController@index');    //ルート名「product」
    Route::get('/home', 'UserController@index');  //ルート名「product.show」
    Route::get('/userList', 'UserController@userList')->name('.userList');
    Route::get('/setting', 'UserController@setting')->name('.setting');  //ルート名「product.show」
    Route::group(['prefix' => 'cart', 'as' => 'cart'], function () {
        Route::get('/', 'CartController@index');
        Route::get('/setting', 'AdminController@setting')->name('.setting');
    });
});