<?php
$method = $_SERVER["REQUEST_METHOD"];
if($method == "POST")
{
	$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody);
	$text = $json->result->parameters->text;
	$response = new \stdClass();
	switch($text)
	{
		case 'hi':
			$speech = "HI MY NAME STD.."
			break;
		case 'bye':
			$speech = "Good Bye..";
			break;
		default:
			$speech ="1234570";
			break;
	}
	$response->speech = "";
	$response->displayText = "";
	$response->source = "webkook";
	echo json_encode($response);	
}else{
	echo "Method Not allow";
}



?>