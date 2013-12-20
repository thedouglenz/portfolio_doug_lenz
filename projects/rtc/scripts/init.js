(function($) {
// Handles receiving messages
	var appKey='3f12e15ab99c8517803a';
	var pusher= new Pusher(appKey);
	
	channel = pusher.subscribe('chat-channel');
	
	// Event listener for the custom event triggered by Pusher
	channel
		.bind(
			'send-message',
			function(data) {
				var cont = $('#chat_area');
				var sender_name= data.name;
				var new_message = data.message;
				cont.append(sender_name+ ": <span class='muted'>" + new_message + "</span><br>");
			});
			
	$('form').submit(function() {
		$.post('post.php', $(this).serialize());
		$('#chatmsg').val('').focus();
		return false;
	});

})(jQuery);