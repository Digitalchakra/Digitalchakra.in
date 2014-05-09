<?php

class EmailController extends BaseController {
	public function index(){
		if (Request::ajax()){
			$input = array('name' => Input::get('dcname'), 
					'email' => Input::get('dcemail'),
					'message' => Input::get('dcmessage'));
			$rules = array(
					'name'    => 'required',
				    'email'   => 'required|email', 
				    'message' => 'max:200',
				  ); 
			$validator = Validator::make($input, $rules); // validate
			if ($validator->fails()){
			    return Response::json(array(
			        'success' => false,
			        'errors' => $validator->getMessageBag()->toArray()

			    ), 200);
			}
			else{
				Contact::insert($input);
				$input['description'] = $input['message'];
				Mail::send('emails.contact', $input, function($message) {
	   				$message->to('queries@digitalchakra.in', 'Admin')->subject('Query From Digitalchakra');
	   				//$message->to('manikandan@digitalchakra.in', 'Manikandna R')->subject('Query From Digitalchakra');
				});
			}
			
			return Response::json(array('success' => true), 200);
			
		}
	}

}