<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://airport-info.p.rapidapi.com/airport",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: airport-info.p.rapidapi.com",
		"X-RapidAPI-Key: 1fbd85cdafmsh61e61a8f3df41f1p162455jsnefc8cc20522a"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}