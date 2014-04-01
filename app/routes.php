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

Route::get('/', function()
{
	return View::make('hello');
});

Route::any('/test', function()
{
	echo "Hello";
  return View::make('test');

});
Route::get('/test/{id}', function($id)
{
  return View::make('test')->with('id', $id);
});

Route::get('/controller/index/{id}' , 'TestController@index');
 
Route::get('/tasks/create' , array('as' => 'tasks_create', 'uses' => 'TasksController@create'));

Route::post('/tasks/store' , array('as' => 'tasks_store', 'uses' => 'TasksController@store'));

