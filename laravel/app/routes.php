<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//default view without controller
/*Route::get('/', function()
{
	return View::make('hello');
});
*/

//default controller
Route::get('/', 'IndexController@index');
Route::post('email', 'EmailController@index');
Route::get('our-projects/projectPage/{projectName}', 'OurprojectsController@projectPage');
//Resource Controllers

Route::resource('our-process', 'OurprocessController');
Route::resource('our-projects', 'OurprojectsController');
Route::resource('what-we-do', 'WhatwedoController');
Route::resource('hosting', 'HostingController');
Route::resource('about-us', 'AboutusController');
