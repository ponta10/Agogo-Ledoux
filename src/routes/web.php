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

Route::group(['prefix' => 'admin', 'as' => 'admin'], function(){
    Route::get('/', 'AdminController@index'); 
    Route::group(['prefix' => 'product', 'as' => '.product'], function(){
        Route::get('/', 'ProductController@index');
        Route::post('/store', 'ProductController@store')->name('.store');
        Route::get('/destroy/{id}', 'ProductController@destroy')->name('.destroy');
    });
    Route::get('/userList', 'AdminController@userList')->name('.userList');
    Route::get('/setting', 'AdminController@setting')->name('.setting');  
});
