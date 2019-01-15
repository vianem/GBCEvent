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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/callcreate', 'EventController@callcreate');
Route::get('/', 'HomeController@welcome');
Route::post('/create','EventController@create');
Route::get('/viewrec/{id}', 'EventController@viewrec');
Route::get('/editrec/{id}', 'EventController@editrec');
Route::post('/update/{id}', 'EventController@update');
Route::get('/delete/{id}', 'EventController@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
