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

Route::get('/', function()
{
  return Redirect::to('file.php');
  
});
//Route::controller('incoming','UserController');
/*
Route::get('incoming', function()
	{
		return View::make('incoming');
	});
  */
Route::get('/new','BaseController@makexml');
Route::match(array('GET', 'POST'), '/incomin', function()
{
  $twiml = new Services_Twilio_Twiml();
});
 
