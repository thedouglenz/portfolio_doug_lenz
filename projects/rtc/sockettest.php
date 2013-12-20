<?php
session_start();

?>

<!doctype html>
<html>
<head>
<meta charset=”utf-8”> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">

</head>
<body>
	<div class="container">
		<div class="hero-unit">
			<h1>Realtime Coder <small>Socket Test Page</small></h1>
			<p>Created by Douglas Lenz using Pusher as a socket server</p>
			<a href="./" class="btn btn-primary btn-large">Back</a>
		</div>
		<div id="socket_status" class="well well-small">Checking connection status...</div>
	
		<div class="container">
			<div style="width:100%; height:300px;" id="chat_area">
			</div>
			<form class="form" method="post" action="post.php">
				<input class="input" id="chatmsg" type="text" name="message" placeholder="Enter a message"/> <input type="submit" class="btn" value="send" />
			</form>
		</div>
	
	</div>
	
	
	
	
	
	<!-- Javascript / Jquery scripting -->
	<script src="http://js.pusher.com/2.1/pusher.min.js"></script>
	<script type="text/javascript">
		var appKey='3f12e15ab99c8517803a';
		var pusher= new Pusher(appKey);
		
		pusher.connection.bind('state_change', function(change) {
			$("#socket_status").html(change.current<?php if(isset($_SESSION['username'])) { echo ' + " as '.$_SESSION['username'] . ' " '; } ?>);
		});
		
	</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="jquery/scoped.js"></script>
	<script> /* Jquery Code */
		$(document).ready( function() { 
		}); /* End Jquery Code */</script>
	<script src="scripts/init.js"></script>
</body>