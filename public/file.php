<?php
include('twilio/sdk/Services/Twilio.php');
$body = $_REQUEST['Body'];
makeTwiml(parsesite($body));
function parsesite($body){
  $ch = curl_init();
        $url =$body;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        $results = curl_exec($ch);
        curl_close($ch);

        $array = explode("<p", $results);

        $string = "";

        array_shift($array);
        foreach ($array as $var) {
            $new=explode(">", $var);
            array_shift($new);
            $new2=explode("</p>", $new[0]);
            
            $new2[0]=str_replace(">","",$new2[0]);
            $string.=strip_tags($new2[0])."\n";
        }
        return $string;

}

function makeTwiml($data)
    {
    $xml= new Services_Twilio_Twiml();
    $var=10;

 
    $xml->sms(substr($data,0,1600));
    


echo $xml;
  
  }
?>