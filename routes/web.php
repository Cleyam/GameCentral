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

// ADMIN ROUTES
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function () {
    Route::get('/admin', 'AdminController@dashboard')->name('dashboard');
    Route::get('admin/customers', 'AdminController@customers')->name('customers');
    Route::get('admin/games', 'AdminController@games')->name('games');
    Route::get('admin/employees', 'AdminController@employees')->name('employees');
    Route::post('admin/employees/delete{id}', 'AdminController@deleteEmployee');
    Route::get('admin/employee/{id}', 'AdminController@employee');
    Route::post('admin/employee/update{id}', 'AdminController@updateEmployee');
    Route::get('admin/employees/new', 'AdminController@newEmployee');
    Route::post('admin/employees/new', 'AdminController@addEmployee');
});
