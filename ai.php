<?php
$method = $_SERVER["REQUEST_METHOD"];
if($method == "POST")
{
	$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody);
	$text = $json->result->parameters->text;
	$response = new \stdClass();
	$response->speech = "hi....";
	$response->displayText = "";
	$response->source = "webkook";
	echo json_encode($response);	
}else{
	echo "Method Not allow";
}



?>