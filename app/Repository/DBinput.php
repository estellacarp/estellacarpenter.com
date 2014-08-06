<<<<<<< HEAD
<?php 
namespace Repository;

use Project;
use Validator;
use Input;
use Redirect;


=======
<?php namespace Repository;

use Project;
>>>>>>> ed63cff0e16691234f2102fefa056c9e6e6554b0

class DBinput implements DBinputInterface{

	public function inputData(){
<<<<<<< HEAD

=======
>>>>>>> ed63cff0e16691234f2102fefa056c9e6e6554b0
		$validation = Validator:: make(Input::all(), Project::$rules);

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
				$projects->ImageSmall= $nameSmall;

<<<<<<< HEAD
				$imageObjs = \Image::make($img);
=======
				$imageObjs = Image::make($img);
>>>>>>> ed63cff0e16691234f2102fefa056c9e6e6554b0
				$imageObjs->resize(200, null, function ($constraint) {
			    $constraint->aspectRatio();
				})->save(public_path().'/asset/image/'.$nameSmall);
		
<<<<<<< HEAD
				$imageObjb = \Image::make($img);
=======
				$imageObjb = Image::make($img);
>>>>>>> ed63cff0e16691234f2102fefa056c9e6e6554b0
				$imageObjb->resize(500, null, function ($constraint) {
			    $constraint->aspectRatio();
				})->save(public_path().'/asset/image/'.$nameBig);

			}

			$projects->save();
			

	}
<<<<<<< HEAD


	public function UpdateData($id){

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

				$imageObjs = \Image::make($img);
				$imageObjs->resize(200, null, function ($constraint) {
				    $constraint->aspectRatio();
					})->save(public_path().'/asset/image/'.$nameSmall);

				$imageObjb = \Image::make($img);
				$imageObjb->resize(500, null, function ($constraint) {
				    $constraint->aspectRatio();
					})->save(public_path().'/asset/image/'.$nameBig);

			}

			$projects->save();
	}


=======
>>>>>>> ed63cff0e16691234f2102fefa056c9e6e6554b0
}