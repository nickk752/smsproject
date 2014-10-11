<!doctype html>
<html lang="en">




<?php

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

?>
</html>