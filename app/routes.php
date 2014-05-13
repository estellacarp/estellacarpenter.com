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
Route::get('login', 'AuthController@index');
Route::get('dashboard','DashboardController@index');
Route::get('dashboard/add', 'DashboardController@add');
Route::get('project','ProjectController@index');
Route::get('project/{id}', 'ProjectController@show');
Route::post('login','AuthController@auth');
Route::post('logout', 'AuthController@logout');
Route::get('profile', array('before' => 'auth' ,function(){
}));