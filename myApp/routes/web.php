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
//Deartment Route
Route::delete('/department/delete/{id}','DepartmentController@delete');
Route::post('/department/update/{id}','DepartmentController@update');
Route::get('/department/edit/{id}','DepartmentController@edit');
Route::post('/department/save', 'DepartmentController@save');
Route::get('/department/create','DepartmentController@create');
Route::get('/department','DepartmentController@index');

//Employee Route

Route::delete('/employee/delete/{id}','EmployeeController@delete');
Route::post('/employee/update/{id}','EmployeeController@update');
Route::get('/employee/edit/{id}','EmployeeController@edit');
Route::post('/employee/save','EmployeeController@save');
Route::get('/employee/create','EmployeeController@create');
Route::get('/employee','EmployeeController@index');

//pofile route

Route::get('/profile','UserController@profile');
Route::post('/profile','UserController@update_avatar');



Route::get('/home', 'HomeController@index')->name('home');