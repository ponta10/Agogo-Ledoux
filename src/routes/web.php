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

Route::group(['prefix' => 'admin', 'as' => 'admin','middleware' => 'auth:admin' ], function () {
    Route::get('/', 'Admin\AdminController@index');
    Route::get('/tag', 'Admin\TagController@index')->name('.tag');
    Route::get('/tag/destroy/{id}', 'Admin\TagController@destroy')->name('.tag.destroy');
    Route::post('/tag/store', 'Admin\TagController@store')->name('.tag.store');
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
    Route::get('/tag', 'Top\UserController@tag')->name('.tag');
    Route::get('/', 'Top\UserController@index');    //ルート名「product」
    Route::get('/home', 'Top\UserController@index')->name('.home');  //ルート名「product.show」
    Route::get('/account', 'Top\AccountController@index')->name('.account'); 
    Route::get('/history', 'Top\HistoryController@index')->name('.history');  
    Route::group(['prefix' => 'detail', 'as' => '.detail'], function () {
        Route::get('/show/{id}', 'Top\DetailController@show')->name('.show');
        Route::post('/review', 'Top\DetailController@review')->name('.review');
    });
    Route::group(['prefix' => 'order', 'as' => '.order'], function () {
        Route::get('/', 'Top\OrderController@index');
    });
    Route::group(['prefix' => 'cart', 'as' => '.cart'], function () {
        Route::get('/', 'Top\CartController@index');
        Route::get('/delete/{id}','Top\CartController@delete')->name('.delete');
        Route::post('/delete/{id}','Top\CartController@destroy')->name('.destroy');
        Route::post('/store', 'Top\CartController@store')->name('.store');
        Route::post('/buy', 'Top\CartController@buy')->name('.buy');
    });
});

// ここから追加
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('admin.login.show');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('admin-register');