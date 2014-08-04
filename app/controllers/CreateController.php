<?php

use Repository\DBinputInterface;

class CreateController extends \BaseController {

	/**
	*@var app\Repository\DBinput
	*/

	protected $projects;

	public function __construct(DBinputInterface $projects){
		$this->project = $projects;
	}

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
	/**$validation = Validator:: make(Input::all(), Project::$rules);

	if ($validation->fails()) {
		return Redirect::back()->withInput()->withErrors($validation->messages());
	}
	$projects = new Project;
	$projects->Title = Input::get('Title');
	$projects->Description = Input::get('Description');
	$projects->Lang = Input::get('Lang');
	$projects->Link= Input::get('Link');

	if (Input::hasFile('ImageBig')) {
		$img = Input::file('ImageBig');
		$nameBig = $projects->Title.'big';
		$nameSmall= $projects->Title.'small';
		$projects->ImageBig = $nameBig;
	// 	$projects->ImageSmall= $nameSmall;
	
		$imageObjs = Image::make($img);
		$imageObjs->resize(200, null, function ($constraint) {
		    $constraint->aspectRatio();
			})->save(public_path().'/asset/image/'.$nameSmall);
		
		$imageObjb = Image::make($img);
		$imageObjb->resize(500, null, function ($constraint) {
		    $constraint->aspectRatio();
			})->save(public_path().'/asset/image/'.$nameBig);

	}

	$projects->save();
	*/

	$projects=$this->project->inputData();
	return Redirect::to('dashboard')->withMessage('Save was Successful');

}


/**
* Display the specified resource.
*
* @param int $id
* @return Response
*/
public function show($id)
{
//
}


/**
* Show the form for editing the specified resource.
*
* @param int $id
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
* @param int $id
* @return Response
*/
public function update($id)
{

	$projects= Project::find($id);
	$projects->Title = Input::get('Title');
	$projects->Description = Input::get('Description');
	$projects->Lang = Input::get('Lang');
	$projects->Link= Input::get('Link');

	if (Input::hasFile('ImageBig')) {
		$img = Input::file('ImageBig');
		$nameBig = $projects->Title.'big';
		$nameSmall= $projects->Title.'small';
		$projects->ImageBig = $nameBig;
		$projects->ImageSmall= $nameSmall;

		$imageObjs = Image::make($img);
		$imageObjs->resize(100, null, function ($constraint) {
		    $constraint->aspectRatio();
			})->save(public_path().'/asset/image/'.$nameSmall);

		$imageObjb = Image::make($img);
		$imageObjb->resize(400, null, function ($constraint) {
		    $constraint->aspectRatio();
			})->save(public_path().'/asset/image/'.$nameBig);

	}

	$projects->save();

	return Redirect:: to('dashboard')->withMessage('The Data has been changed');
}


/**
* Remove the specified resource from storage.
*
* @param int $id
* @return Response
*/
public function destroy($id)
{

$projects = Project::find($id);
$projects->delete();


return Redirect:: to('dashboard');
}


}