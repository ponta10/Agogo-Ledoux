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

// Route::prefix('admin')->group(function () {
//     Route::get('/','AdminController@index')->name('admin');
//     Route::get('/product','AdminController@product')->name('');
// });

Route::group(['prefix' => 'admin', 'as' => 'admin'], function(){
    Route::get('/', 'AdminController@index');    //ルート名「product」
    Route::get('/product', 'AdminController@product')->name('.product');  //ルート名「product.show」
    Route::get('/userList', 'AdminController@userList')->name('.userList');
    Route::get('/setting', 'AdminController@setting')->name('.setting');  //ルート名「product.show」
});

Route::group(['prefix' => 'user', 'as' => 'user'], function(){
    Route::get('/', 'UserController@index');    //ルート名「product」
    Route::get('/home', 'UserController@index');  //ルート名「product.show」
    Route::get('/userList', 'UserController@userList')->name('.userList');
    Route::get('/setting', 'UserController@setting')->name('.setting');  //ルート名「product.show」
});