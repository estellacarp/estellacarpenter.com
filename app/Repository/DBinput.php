<?php namespace Repository;

use Project;

class DBinput implements DBinputInterface{

	public function inputData(){
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
			

	}
}