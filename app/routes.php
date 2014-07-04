<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('home','HomeController@index');
Route::get('logout', array('user'=> 'homeController@doLogout'));

Route::get('login', 'AuthController@index');
Route::post('login','AuthController@auth');
Route::post('logout', 'AuthController@logout');

Route::group(array('before'=>'auth'), function (){

Route::get('project','ProjectController@index');
Route::get('project/{id}', 'ProjectController@show');
Route::get('project/{Title}', 'ProjectController@showTitle');

Route::get('dashboard','DashboardController@index');
Route::get('dashboard/add', 'DashboardController@add');
Route::get('dashboard/{id}', 'DashboardController@show')->where('id','\d+');
Route::get('editPage','DashboardController@editPage');
Route::get('editPage/{id}','DashboardController@edit');
Route::get('siteView','DashboardController@show');
Route::post('cancel', 'DashboardController@index');
Route::get('cancel', array(''));

Route::get('create','Createcontroller@index');
Route::post('create','Createcontroller@index');
Route::post('save','CreateController@store');
Route::get('save', array(''));
Route::post('update/{id}','CreateController@update');
Route::get('update', array(''));



Route::get('deleteRow/{id}','Createcontroller@destroy');

Route::get('profile', array('before' => 'auth' ,function(){}));


Route::get('tasks', 'TaskController@index');
Route::get('tasks/{id}','TaskController@show')->where('id','\d+');

});
