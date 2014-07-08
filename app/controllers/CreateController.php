<?php

class CreateController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('dashboard.create');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validation = Validator:: make(Input::all(), Project::$rules);

		if($validation-> fails()){
			return Redirect::back()->withInput()->withErrors($validation->messages());
		} 
		$projects = new Project;
		$projects->Title = Input::get('Title');
		$projects->Description = Input::get('Description');
		$projects->Lang = Input::get('Lang');

		if (Input::hasFile('image'))
		{
			$file = Input::file('image');
			$name = $projects->Title .'.jpg';
			$file = $file->move(public_path().'/asset/image', $name);
			$projects->Image = $name;
		}
		$projects->save();

		// $project = new project;
		// $project->Title = Input::get('Title');
		// $project->Description = Input::get('Description');
		
		// $project->save();

		

		return Redirect:: to('dashboard')->withMessage('Save was Successful');
		
	}

	
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$projects = Project::find($id);
	
		return View::make('public.editPage')->withproject($projects);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
	
		$projects= Project::find($id);
		$projects->Title = Input::get('Title');
		$projects->Description = Input::get('Description');
		$projects->Lang = Input::get('Lang');

		if (Input::hasFile('image'))
			{
				$file = Input::file('image');
				$name = $projects->Title .'.jpg';
				$file = $file->move(public_path().'/asset/image', $name);
				$projects->Image = $name;
			}
		
		
		$projects->save();

			
		return Redirect:: to('dashboard')->withMessage('The Data has been changed');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
		$projects = Project::find($id);
		$projects->delete();
		

		return Redirect:: to('dashboard');
	}


}
