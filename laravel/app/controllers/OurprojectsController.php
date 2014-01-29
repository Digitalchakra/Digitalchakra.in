<?php

class OurprojectsController extends BaseController {
	
	public function index()
	{
		$projects = Projects::all();
		return View::make('ourprojects',array('projects' => $projects));
	}
	public function projectPage($id)
	{
		/*$img = array('I' =>'I.jpg' ,'M' =>'L.png','images'	 =>array(0=>"imgage1", 1=>"imgage2") );
		$arr = serialize($img);
		print_r($arr);

		echo "=============";

		print_r(unserialize($arr));
		die;*/
		$project = Projects::find($id);
		if(count($project))
		{
			return View::make('projectPage',array('project' => $project));
		}
		else
		{
			App::abort(404);
		}
	}

}
