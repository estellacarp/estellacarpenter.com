<?php 

use Repository\DBinputInterface;

<<<<<<< HEAD
class CreateController extends BaseController {

	/**
	*@var app\Repository\DBinput
	*/

	protected $projects;

	public function __construct(DBinputInterface $projects){
		$this->project = $projects;
	}
=======
class CreateController extends \BaseController {
>>>>>>> ed63cff0e16691234f2102fefa056c9e6e6554b0

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
<<<<<<< HEAD
	
	$projects=$this->project->inputData();

=======
<<<<<<< HEAD
<<<<<<< HEAD
	/**$validation = Validator:: make(Input::all(), Project::$rules);
=======
	$validation = Validator:: make(Input::all(), Project::$rules);
>>>>>>> origin/master
=======
	$validation = Validator:: make(Input::all(), Project::$rules);
>>>>>>> 5b9f6a94a0aa5615d2a8488026c6c3b69e35b298

	if ($validation->fails()) {
		return Redirect::back()->withInput()->withErrors($validation->messages());
	}
	$projects = new Project;
	$projects->Title = Input::get('Title');
	$projects->Description = Input::get('Description');
	$projects->Lang = Input::get('Lang');
	$projects->Link= Input::get('Link');

<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 5b9f6a94a0aa5615d2a8488026c6c3b69e35b298
	if (Input::hasFile('Image')) {
		$img = Input::file('Image');
		$name = $projects->Title.'.jpg';
		$projects->Image = $name;

		$imageObj = Image::make($img);
		$imageObj->resize(300, null, function ($constraint) {
		    $constraint->aspectRatio();
		})->save(public_path().'/asset/image/'.$name);
<<<<<<< HEAD
>>>>>>> origin/master
=======
>>>>>>> 5b9f6a94a0aa5615d2a8488026c6c3b69e35b298

	}

	$projects->save();
<<<<<<< HEAD
<<<<<<< HEAD
	*/

	$projects=$this->project->inputData();
=======

>>>>>>> origin/master
=======

>>>>>>> 5b9f6a94a0aa5615d2a8488026c6c3b69e35b298
>>>>>>> ed63cff0e16691234f2102fefa056c9e6e6554b0
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

<<<<<<< HEAD
	$projects=$this->project->UpdateData($id);
=======
	$projects= Project::find($id);
	$projects->Title = Input::get('Title');
	$projects->Description = Input::get('Description');
	$projects->Lang = Input::get('Lang');
	$projects->Link= Input::get('Link');

<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 5b9f6a94a0aa5615d2a8488026c6c3b69e35b298
	if (Input::hasFile('Image')) {
		$img = Input::file('Image');
		$name = $projects->Title.'.jpg';
		$projects->Image = $name;

		$imageObj = Image::make($img);
		$imageObj->resize(300, null, function ($constraint) {
		    $constraint->aspectRatio();
		})->save(public_path().'/asset/image/'.$name);
<<<<<<< HEAD
>>>>>>> origin/master
=======
>>>>>>> 5b9f6a94a0aa5615d2a8488026c6c3b69e35b298

	}

	$projects->save();
>>>>>>> ed63cff0e16691234f2102fefa056c9e6e6554b0

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