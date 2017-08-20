<?php

$curl = curl_init();
curl_setopt_array($curl, Array(
	CURLOPT_URL            => "https://feeds.citibikenyc.com/stations/stations.json",
	CURLOPT_TIMEOUT        => 300,
	CURLOPT_CONNECTTIMEOUT => 60,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_SSL_VERIFYHOST => false,
	CURLOPT_SSL_VERIFYPEER => false,
	CURLOPT_ENCODING       => 'gzip,deflate'
));
$json = curl_exec($curl);

print_r($json);



?>
