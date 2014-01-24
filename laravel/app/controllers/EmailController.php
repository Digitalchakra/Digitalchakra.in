<?php

class EmailController extends BaseController {
	public function index()
	{
		if (Request::ajax())
		{
		    //
		}
		//return View::make('hosting');
		$data = array();
		Mail::send('emails.contact', $data, function($message) {
   			$message->to('manikandan@digitalchakra.in', 'Manikandna R')->subject('Test Email1');
		});
		echo "eeeeeeeeeeeeeeeeee"; die;
	}

}