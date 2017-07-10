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

Route::get('/pages','PagesController@index');
Route::get('profile','PagesController@profile');


Route::get('/users/create',['uses'=>'UsersController@create']);
Route::Post('users', ['uses'=>'UsersController@store']);

Route::get('/home', 'HomeController@index')->name('home')->middleware('authenticate');
//Route::get('/profile/{username}','ProfileController@profile')->middleware('authenticate');
Route::resource('article','ArticlesController');

Route::resource('departments','DepartmentController');
Route::resource('teams','TeamController');
Route::resource('workschedules','WorkScheduleController');