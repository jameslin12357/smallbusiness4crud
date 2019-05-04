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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::resource('addresses', 'AddressController');
Route::resource('customers', 'CustomerController');
Route::resource('customersstaffs', 'CustomerStaffController');
Route::resource('customersstaffsinventories', 'CustomerStaffInventoryController');
Route::resource('genders', 'GenderController');
Route::resource('inventories', 'InventoryController');
Route::resource('manufacturers', 'ManufacturerController');
Route::resource('staffs', 'StaffController');
Route::resource('users', 'UserController');
