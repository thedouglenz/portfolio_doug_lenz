<?php
require_once 'pusher-lib/Pusher.php';
session_start();

$key='3f12e15ab99c8517803a';
$secret='42b144d661cd75d5ffc7';
$app_id='57728';
$pusher = new Pusher($key, $secret, $app_id);

if(isset($_POST['message'])) {
	$data = array ('message' => htmlentities(strip_tags($_POST['message'])), 'name'=>$_SESSION['username'] );
	$pusher->trigger('chat-channel', 'send-message', $data);
}

?>