<?php
class Capirestlogin {

	function loginAPI($sFuncion, $arrDatos){
	//API URL
	$url = 'http://system-matrix.com/api/Login/'.$sFuncion.'/';
	
	//API key
	$apiKey = 'Ve5muByyKs54wpm62d73lHEwDnXKGiYH1v6G7GyE';

	//Auth credentials
	//$username = "admin";
	//$password = "1234";
	//create a new cURL resource
	$ch = curl_init($url);

	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-API-KEY: " . $apiKey));
	//curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");

	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $arrDatos);

	$result = curl_exec($ch);

	//close cURL resource
	curl_close($ch);

	return $result;

	}
}

