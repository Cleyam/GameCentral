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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function () {
    Route::get('/admin', 'AdminController@dashboard')->name('dashboard');
    Route::get('admin/customers', 'AdminController@customers')->name('customers');
    Route::get('admin/games', 'AdminController@games')->name('games');
    Route::get('admin/employees', 'AdminController@employees')->name('employees');
});
