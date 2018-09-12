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

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/inventory', function () {
    return view('inventoryMgr');
});
Route::get('/inventory/update', 'FoodItemController@indexUpdate');
Route::get('/inventory/addnew', 'FoodItemController@indexAddNew');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('foodItems', 'FoodItemController');