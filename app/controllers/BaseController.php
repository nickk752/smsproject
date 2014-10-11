<?php
include('Services/Twilio.php');
class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
  public function makeTwiml()
    {
    /*
    $var=10;
  $xml = '<Response>
  <Message to="+14848857966" from="+12672720904">a</Message>
</Response>';
    

  $response = Response::make($xml, 200);
  $response->header('Content-Type', 'text/xml');
  echo $response;
  */
  }
  
  public function makexml(){
    echo 'hello';
  }
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
