<?php
class Capirestlogin {

	function loginAPI($sFuncion, $arrDatos){
	//API URL
	// Llamada interna al mismo dyno; APP_URL permite apuntar a otra URL si hace falta
	$base = getenv('APP_URL') ?: 'http://127.0.0.1:'.(getenv('PORT') ?: '80');
	$url = rtrim($base, '/').'/api/Login/'.$sFuncion.'/';

	//API key
	$apiKey = 'Ve5muByyKs54wpm62d73lHEwDnXKGiYH1v6G7GyE';

	//Auth credentials
	$ch = curl_init($url);

	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-API-KEY: " . $apiKey));
	//curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");

	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $arrDatos);

	$result = curl_exec($ch);

	// Diagnostico (sin API key ni datos del POST)
	error_log(sprintf('[APILogin] url=%s http=%d errno=%d error=%s tiempo=%.3fs',
		$url, curl_getinfo($ch, CURLINFO_HTTP_CODE), curl_errno($ch), curl_error($ch),
		curl_getinfo($ch, CURLINFO_TOTAL_TIME)));

	//close cURL resource
	curl_close($ch);

	return $result;

	}
}

