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
    return view('login');
});




Route::get('/regist', 'EmployeeController@index');

Route::post('/register/employee', 'EmployeeController@register');


Route::get('/medical', 'PanelController@index');

Route::post('/medical/add', 'PanelController@add');

Route::get('/viewmedical', 'PanelController@view');



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

