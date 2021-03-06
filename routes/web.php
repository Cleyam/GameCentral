<?php

use Illuminate\Support\Facades\Route;

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

// AUTHENTIFICATION ROUTES
Auth::routes();

// APP ROUTES
Route::get('/', 'HomeController@index')->name('home');
Route::get('search', 'HomeController@search');
Route::post('search', 'HomeController@search');
Route::get('game/{id}', 'HomeController@game');
Route::get('game/rental/{id}', 'HomeController@rentalform');
Route::post('game/rental/{id}', 'HomeController@rent');
Route::get('/api/search', 'HomeController@apiCustomers');
Route::get('customer/{id}', 'HomeController@customer');
Route::post('customer/{id}', 'HomeController@return');


// ADMIN ROUTES
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function () {
    Route::get('/admin', 'AdminController@dashboard')->name('dashboard');
    // Game routes
    Route::get('admin/games', 'AdminController@games')->name('games');
    Route::post('admin/games/delete{id}', 'AdminController@deleteGame');
    Route::get('admin/game/{id}', 'AdminController@game');
    Route::post('admin/game/update{id}', 'AdminController@updateGame');
    Route::get('admin/games/new', 'AdminController@newGame');
    Route::post('admin/games/new', 'AdminController@addGame');
    // Customer routes
    Route::get('admin/customers', 'AdminController@customers')->name('customers');
    Route::post('admin/customers/delete{id}', 'AdminController@deleteCustomer');
    Route::get('admin/customer/{id}', 'AdminController@customer');
    Route::post('admin/customer/update{id}', 'AdminController@updateCustomer');
    Route::get('admin/customers/new', 'AdminController@newCustomer');
    Route::post('admin/customers/new', 'AdminController@addCustomer');
    // Employee routes
    Route::get('admin/employees', 'AdminController@employees')->name('employees');
    Route::post('admin/employees/delete{id}', 'AdminController@deleteEmployee');
    Route::get('admin/employee/{id}', 'AdminController@employee');
    Route::post('admin/employee/update{id}', 'AdminController@updateEmployee');
    Route::get('admin/employees/new', 'AdminController@newEmployee');
    Route::post('admin/employees/new', 'AdminController@addEmployee');
});
