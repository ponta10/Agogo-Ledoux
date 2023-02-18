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

Route::group(['prefix' => 'admin', 'as' => 'admin','middleware' => 'auth'], function () {
    Route::get('/', 'Admin\AdminController@index');
    Route::group(['prefix' => 'product', 'as' => '.product'], function () {
        Route::get('/', 'Admin\ProductController@index');
        Route::post('/store', 'Admin\ProductController@store')->name('.store');
        Route::get('/destroy/{id}', 'Admin\ProductController@destroy')->name('.destroy');
        Route::get('/restore/{id}', 'Admin\ProductController@restore')->name('.restore');
        Route::get('/delete/{id}', 'Admin\ProductController@delete')->name('.delete');
        Route::get('/show/{id}', 'Admin\ProductController@show')->name('.show');
        Route::put('/edit/{id}', 'Admin\ProductController@edit')->name('.edit');
        Route::get('/search', 'Admin\ProductController@search')->name('.search');
        Route::get('/sort', 'Admin\ProductController@sort')->name('.sort');
    });
    Route::get('/userList', 'Admin\AdminController@userList')->name('.userList');
    Route::get('/setting', 'Admin\AdminController@setting')->name('.setting');  //ルート名「product.show」
});

Route::group(['prefix' => 'user', 'as' => 'user'], function(){
    Route::get('/', 'Top\UserController@index');    //ルート名「product」
    Route::get('/home', 'Top\UserController@index');  //ルート名「product.show」
    Route::get('/userList', 'Top\UserController@userList')->name('.userList');
    Route::get('/setting', 'Top\UserController@setting')->name('.setting');  //ルート名「product.show」
    Route::group(['prefix' => 'detail', 'as' => '.detail'], function () {
        Route::get('/', 'Top\DetailController@index');
    });
    Route::group(['prefix' => 'cart', 'as' => 'cart'], function () {
        Route::get('/', 'Top\CartController@index');
        Route::get('/setting', 'Admin\AdminController@setting')->name('.setting');
    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ここから追加
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('admin.login.show');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('admin-register');

// Route::view('/admin', 'admin')->middleware('auth:admin')->name('admin-home');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');