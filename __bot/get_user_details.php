<?php

    $id = $_GET['id'];

	$auth_token = '50703e63d6a7e5d8-5588a2b04853c18c-bc4a2559a855c9da';
	$webhook = 'https://bot.agromaster.pp.ua/index.php';
	
	$jsonData = 
	'{
		"auth_token": "'.$auth_token.'",
		"url": "'.$webhook.'",
		"send_name": true,
		"send_photo": true,
		"event_types": ["subscribed", "unsubscribed", "delivered", "message", "seen"],
		
		"id": "'.$id.'"
	}';
	
	$ch = curl_init('https://chatapi.viber.com/pa/get_user_details');
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	$response = curl_exec($ch);
	$err = curl_error($ch);
	curl_close($ch);
	if($err) {echo($err);}
	else {echo($response);}
?>