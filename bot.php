<?php
$method = $_SERVER['REQUEST_METHOD'];
if($method == "POST")
{
$requestBody = file_get_contents('php://input');
$json= json_decode($requestBody);

$text =$json->result->parameters;
switch($text)
{
case 'hi':
$speech = "Hi,Nice to meet you";
break;
default:
 $speech="Sorry, I didnt get that.";
break;
}
$response = new \stdClass();
$response->speech = "";
$response->displayText = "";
$response->source = "webhook";
echo json_encode($response);
}
else
{
	echo "Method not allowed";
}
?>