<?php

$auth_token = "50703e63d6a7e5d8-5588a2b04853c18c-bc4a2559a855c9da";
$send_name = "AgroMaster - info";

$is_log = true;

$url = $_GET['url'] ?? 'https://agromaster.pp.ua';


function put_log_in($data)
{
	global $is_log; if($is_log) {file_put_contents("tmp_in.txt", $data."\n", FILE_APPEND);}
}

function put_log_out($data)
{
	global $is_log; if($is_log) {file_put_contents("tmp_out.txt", $data."\n", FILE_APPEND);}
}



function sendReq($data)
{
    //var_dump($data);

	$request_data = json_encode($data);
	put_log_out($request_data);

	//here goes the curl to send data to user
	$ch = curl_init("https://chatapi.viber.com/pa/send_message");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $request_data);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	$response = curl_exec($ch);
	$err = curl_error($ch);
	curl_close($ch);
	if($err) {return $err;}
	else {return $response;}
}

function sendMsg($sender_id, $text, $type = 'text', $tracking_data = Null, $arr_asoc = Null)
{
	global $auth_token, $send_name, $url;

	$data['auth_token'] = $auth_token;      // токен
	$data['sender']['name'] = $send_name;   // отправитель
	$data['receiver'] = $sender_id;         // получатель
	$data['type'] = $type;                  // тип

	$data['text'] = $text ?? '';            // текст


    if($type == 'url') {
        $data['media'] = $url;
    }

    /*
    if($type == 'contact') {
        $data['contact']['name'] = $name;
        $data['contact']['phone_number'] = $phone_number;
    }*/

	//$data['sender']['avatar'] = $input['sender']['avatar'];
	//$data['min_api_version'] = $input['sender']['api_version'];
	if($tracking_data != Null) {$data['tracking_data'] = $tracking_data;}
	if($arr_asoc != Null) { foreach($arr_asoc as $key => $val) {$data[$key] = $val;}	}


	return sendReq($data);
}

?>
