<?php 

use Repository\DBinputInterface;

class CreateController extends BaseController {

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

	$projects=$this->project->UpdateData($id);

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