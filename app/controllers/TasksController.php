<?php
class TasksController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function create()
	{
    return View::make('tasks.create');
	}
  public function index()
	{
    $tasks = Task::all();
    return View::make('tasks.index')->with('mytasks', $tasks);
	}
  public function store()
	{
     Task::create(Input::all());
     return Redirect::route('tasks_index');
	}

}