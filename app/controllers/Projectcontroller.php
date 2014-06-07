<?php

class Projectcontroller extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /projectcontroller
	 *
	 * @return Response
	 */
	public function index()
	{		
		return View::make('public.project');
		//return $project;
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /projectcontroller/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 * POST /projectcontroller
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /projectcontroller/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$project = Project::find($id);
		return View::make('public.project',['project'=> $project]);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /projectcontroller/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /projectcontroller/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /projectcontroller/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}