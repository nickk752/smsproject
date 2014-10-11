<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>



<?php
class UserController extends BaseController {

    /**
     * Show the profile for the given user.
     */
    public function generatexml()
{
  $var=10;
//  $rand=new Services_Twilio_Twiml();
  $xml = '<Response>
  <Message to="+14848857966" from="+12672720904">Hello World</Message>
</Response>';
//  $xml->message($var,array(
//    'to' => '+14848857966',
//   'from' => '+12672720904'    
//  ));
  $response = Response::make($xml, 200);
  $response->header('Content-Type', 'text/xml');
  return $response;
}

}



?>
</html>