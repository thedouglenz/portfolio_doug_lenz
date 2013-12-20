<?php
	session_start();
	if(isset($_POST['save_file'])) {
		if($_POST['save_file'] == 'Save') {
			$File = $_POST['input_filename'];
			$Handle = fopen($File, 'w');
			$Data = $_POST['codepane']; 
			fwrite($Handle, $Data);  
			fclose($Handle); 
			$saved = true;
		}
	}
	
	if(isset($_POST['username'])) {
		$_SESSION['username'] = $_POST['username'];
	}
?>

<!doctype html>
<html>
<head>
<meta charset=�utf-8�> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">

</head>
<body>
	<div class="container-fluid">
		<div class="page-header">
			<h1>Realtime Coder <small> Code HTML/CSS/Javascript with live preview</small></h1>
		</div>
		<div class="well well-small" id="dynamic_instructions">
			<?php 
				if(isset($saved)) {
					echo $_POST['input_filename'] . ' is ready for download. Right click and choose Save as... <p class="label label-warning"><a href=" ' . $_POST['input_filename'] . ' ">Download ' . $_POST['input_filename'] . '</a></p>';
				}
				else { 
			?>
		
			<p>Enter HTML/CSS in the code editor on the left and the live preview will change automatically.</p> <?php } ?>
		</div>
		<span class="label label-info">Tools</span>
		<div class="btn-group" style="margin-bottom:7px;">
			<button class="btn" id="btn_add_style_tags">Style</button>
			<button class="btn" id="btn_add_jquery_block">JQuery</button>
			<button class="btn" id="btn_prefix_comments">Prefix Comments</button>
		</div>
		<div class="row-fluid">
			<div class="span4">
				<form name="editor" method="post" action="">
					<textarea id="codepane" name="codepane" style="width:100%; height:300px; resize:none;" placeholder="Your code goes here..."></textarea>
					<label>
						<span class="label label-info">Save and download: </span> <input type="text" name="input_filename" id="input_filename" placeholder="untitled.html"/>
						<input class="btn" type="submit" name="save_file" value="Save">
					</label>
					
				</form>
			</div>
			<div class="span8" id="righthand">
				<span class="label label-inverse"><h3><em> See your code work in realtime here</em></h3></span>
			</div>
		</div>
	</div> <!--/container-->
	<div class="container">
		<div class="page-header">
			<h1> WebSocket chat </h1><p>Test a fast realtime implementation of chat via WebSockets and Pusher.</p>
			<form style="display: inline;" id="name_form" action="" method="post">Hey, what's your name? <input type="text" name="username" id="username"/> <input class="btn btn-primary btn-small" id="name_form_submit" name="submit" type="submit" onclick="hideNameForm()"/></form>
				<a  style="display: inline;" class="btn btn-primary" href="sockettest.php">Test socket chat</a>
		</div>
	</div>
	<div class="footer">
		<div class="container-fluid">
			<p class="muted credit">Created by <a href="#">Douglas Lenz</a>.</p>
			<ul class="inline">
				<li><a href="#"> Home </a>|</li>
				<li><a href="#"> About </a>|</li>
				<li><a href="#"> Help </a></li>
			</ul>
		</div>
	</div>
	<!-- End Document -->
	
	<!-- Javascript / Jquery scripting -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="jquery/scoped.js"></script>
	<script> /* Jquery Code */
		$(document).ready( function() { 
			// Check if scope is used in the doc
			$.scoped();
			
			$("#codepane").keyup( function() { 
				var html_code = $("#codepane").val();
				html_code = html_code.replace("<style", "<style scoped ") ;
				$("#righthand").html( html_code); 
				$.scoped();
			});
			$("textarea").keydown(function(e) { 
				if(e.keyCode === 9) { 
					var start = this.selectionStart; 
					var end = this.selectionEnd; 
					var $this = $(this); 
					var value = $this.val(); 
					$this.val(value.substring(0, start) + "\t" + value.substring(end)); 
					this.selectionStart = this.selectionEnd = start + 1; 
					e.preventDefault(); 
				} 
			});
			// Button click handlers
			$("#btn_add_style_tags").click( function() { // click add style tags button function
				$("#codepane").val("<style>\n\n</style>\n\n" + $("#codepane").val() ) ;
				$(this).attr('disabled', 'disabled');
				$("#dynamic_instructions").html("<p>Added style tags to code editor</p>");
			});
			$("#btn_add_jquery_block").click( function() { // click add style tags button function
				$("#codepane").val($("#codepane").val() + "\n\n<script>\n$(document).ready( function() {\n\n});\n</script\>");
				$(this).attr('disabled', 'disabled');
				$("#dynamic_instructions").html("<p>Added jquery block to code editor</p>");
			});
			$("#btn_prefix_comments").click( function() {
				$("#codepane").val("<!--Enter comments--\>\n\n" + $("#codepane").val() ) ;
				$(this).attr('disabled', 'disabled');
				$("#dynamic_instructions").html("<p>Added comments to code editor</p>");
			});
			
			function hideNameForm() {
				$("#name_form").hide();
			}
			
		}); /* End Jquery Code */</script>
</body>