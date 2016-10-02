Test Page

<?php

	$valueObject = "{id: 1}";
	$url = "./api/cities";

	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HEADER, FALSE); 
	curl_setopt($ch, CURLOPT_POST, TRUE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $valueObject);
	curl_setopt($ch, CURLOPT_URL, $url); 
	$server_output = curl_exec($ch);
	
	echo $server_output;
	
?>