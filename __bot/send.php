<?php

include 'config.php';


$id = $_GET['id'];
$text = $_GET['txt'] ?? '';
$url = $_GET['url'] ?? false;


$type = ($url) ? 'url' : 'text';



sendMsg($id, $text, $type);  


?>