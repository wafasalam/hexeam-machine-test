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

Route::get('/', function () {
    return view('welcome');
});

//Admin:
Route::get('admin', 'App\Http\Controllers\AdminController@index');
Route::post('login', 'App\Http\Controllers\AdminController@login');
Route::get('dash', 'App\Http\Controllers\AdminController@dash');
Route::get('admin/create', 'App\Http\Controllers\AdminController@create');
//employee:
Route::post('employee/store', 'App\Http\Controllers\EmployeeController@store');
Route::get('edit/{id}', 'App\Http\Controllers\EmployeeController@edit');
Route::get('delete/{id}', 'App\Http\Controllers\EmployeeController@delete');
Route::post('update', 'App\Http\Controllers\EmployeeController@update');
//employee login:
Route::post('employee_login_post', 'App\Http\Controllers\EmployeeLoginController@login');
Route::get('employee_login', 'App\Http\Controllers\EmployeeLoginController@index');
Route::get('detail', 'App\Http\Controllers\EmployeeLoginController@detail');

Route::get('logout', 'App\Http\Controllers\EmployeeLoginController@logout');