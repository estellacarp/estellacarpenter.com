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
Route::get('login', 'AuthController@index');
Route::post('login','AuthController@auth');
Route::get('logout', array('user'=> 'homeControllerdoLogout'));
Route::post('logout', 'AuthController@logout');
Route::get('dashboard','DashboardController@index');
Route::get('dashboard/add', 'DashboardController@add');
Route::get('project','ProjectController@index');
Route::get('project/{id}', 'ProjectController@show');
Route::get('profile', array('before' => 'auth' ,function(){}));
Route::get('CreateNewProject','CreateNewPageController@index');
Route::post('CreateNewProject','CreateNewPageController@index');
Route::get('create','Createcontroller@index');
Route::post('create','Createcontroller@index');
Route::get('cancel', array(''));
Route::post('cancel', 'DashboardController@index');
Route::post('save','CreateController@store');
Route::get('save', array(''));
Route::get('editPage','DashboardController@editPage');

// Route::get('project/{project}',function($project)
// {
// 	$project = Project::all();
// 	return View::make('project.show', ['project'=>$project]);
// });