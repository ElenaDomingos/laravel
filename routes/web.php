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

Route::get('/', ['uses' => 'ProductController@index']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', 'BlogController@index');
Route::get('/blog/single/{id}', 'BlogController@show');
Auth::routes();


Route::get('/home', 'HomeController@index');

Route::get('/users', ['midddleware' => 'auth', 'uses'=>'ManagerUsersController@index']);
Route::post('/set/user/user', ['midddleware' => 'auth', 'uses'=>'ManagerUsersController@setUser']);
Route::post('/set/user/admin', ['midddleware' => 'auth', 'uses'=>'ManagerUsersController@setAdmin']);

Route::get('/products', ['middleware'=>'auth', 'uses'=>'ProductController@index']);
Route::get('/products/create', ['middleware'=>'auth', 'uses'=>'ProductController@create']);
Route::get('/products/list', ['middleware'=>'auth', 'uses'=>'ProductController@show']);

Route::get('/products/product/{id}', 'ProductController@oneproduct');
//Route::get('/products/product/{id}', ['middleware' => 'auth', 'uses' => 'ProductController@oneproduct']);



Route::post('/product/{id}/update', ['middleware'=>'auth', 'uses'=>'ProductController@update']);
Route::post('/product/{id}/edit', ['middleware'=>'auth', 'uses'=>'ProductController@edit']);
Route::post('/product/{id}/delete', ['middleware'=>'auth', 'uses'=>'ProductController@destroy']);
Route::post('/store/product', ['middleware'=>'auth', 'uses'=>'ProductController@store']);
Route::post('/checkout', ['middleware'=>'auth', 'uses'=>'CheckoutController@show']);
Route::get('/categories', ['middleware'=>'auth', 'uses'=>'CategoryController@index']);
Route::post('/category/{id}/edit', ['middleware'=>'auth', 'uses'=>'CategoryController@edit']);
Route::post('/category/{id}/update', ['middleware'=>'auth', 'uses'=>'CategoryController@update']);
Route::post('/save/categories', ['middleware'=>'auth', 'uses'=>'CategoryController@store']);
Route::post('/delete/category', ['middleware'=>'auth', 'uses'=>'CategoryController@destroy']);
Route::post('/order', 'OrdersController@store');
Route::get('/orders/list', ['middleware'=>'auth', 'uses'=>'OrdersController@index']);
Route::get('/manage/orders/', ['middleware'=>'auth', 'uses'=>'OrdersController@show']);




Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');


