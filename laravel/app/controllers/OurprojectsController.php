<?php

class OurprojectsController extends BaseController {
	
	public function index()
	{
		return View::make('ourprojects');
	}
	public function projectPage($projectName)
	{
		return View::make('projectPage',array('projectName'=>$projectName,'projectLink'=>'http://ezcv.in'));
	}

}
