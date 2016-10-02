<?php

	$url = "http://localhost:8080/simple-service-webapp/webapi/cities";

	/* $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_HEADER, FALSE); 
	//curl_setopt($ch, CURLOPT_GET, TRUE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
	//curl_setopt($ch, CURLOPT_POSTFIELDS, $valueObject);
	curl_setopt($ch, CURLOPT_URL, $url ); 
	$server_output = curl_exec($ch);
	 */
	function httpGet($url)
		{
			$ch = curl_init();  
		 
			curl_setopt($ch,CURLOPT_URL,$url);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
		 
			$output=curl_exec($ch);
		 
			curl_close($ch);
			return $output;
		}
 
echo httpGet("http://hayageek.com");
	
	/* echo "<pre>";
	var_dump($server_output);
	var_dump(curl_getinfo($ch));
	echo "</pre>"; */
	
?>