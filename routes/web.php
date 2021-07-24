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
Route::get('/dashboard','HomeController@dashboard')->name('admin.dashboard');
Route::get('/profileupdate','HomeController@profileEdit')->name('profile.update');
Route::post('profileupdate','HomeController@profileEditUpdate')->name('profile.store');

Route::get('page','PageController@getForm')->name('admin.page.form');
Route::post('page/submit','PageController@submitForm')->name('page.form.submit');
Route::get('/table','PageController@gettable')->name('admin.page.table');
Route::get('page/edit/form/{id}','PageController@editForm')->name('admin.page.edit');
Route::put('page/update/form/{id}','PageController@updateForm')->name('admin.page.form.update');
Route::put('/page/delete/form/{id}','PageController@deleteForm')->name('admin.page.form.delete');

Route::get('create','ProductController@getForm')->name('admin.product.form');
Route::post('product/submit','ProductController@submitForm')->name('product.form.submit');
Route::get('/product','ProductController@gettable')->name('admin.product.table');

Route::get('/category','CategoryController@getForm')->name('admin.shop.category');
Route::post('/category/submit','CategoryController@submitForm')->name('admin.shop.category.submit');

Route::get('/menu','MenuController@gettable')->name('admin.shop.menu');


Route::get('/index ','RestaurantController@getData')->name('admin.restaurant.create ');
Route::get('/store ','RestaurantController@store')->name('admin.restaurant.store ');
Route::post('/restaurant/submit','RestaurantController@submitForm')->name('restaurant.form.submit');
Route::get('/request','RestaurantController@getTable')->name('admin.restaurant.request');

Route::get('/resto','RestoController@getData')->name('admin.restaurant.resto');
Route::get('/review','ReviewController@getTable')->name('admin.restaurant.review');

Route::get('/ride','RiderController@gettable')->name('admin.rider.ride');
Route::get('/rider','RiderController@store')->name('admin.rider.request');

Route::get('/customer','CustomerController@getTable')->name('admin.customer.table');