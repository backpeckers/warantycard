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
    return view('auth.login');
});
// For web
// Route::get('/getCustomer',array('as'=>'viewCustomer','uses'=>'CustomerController@getCustomer'));
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// Customer
Route::get('/add_customer','CustomerController@getCustomerPage');
Route::get('/edit_customer','CustomerController@getEditCustomerPage');
Route::post('/add_customer','CustomerController@addCustomer');
// Product
Route::get('/product','ProductController@getProductPage');
Route::get('/add_product','ProductController@getAddProductPage');
Route::get('/edit_product','ProductController@getEditProductPage');

// Waranty
Route::get('/waranty','WarantyController@getWarantyPage');


// API for mobile
Route::get('/mobile/getCustomer','CustomerController@getCustomer');