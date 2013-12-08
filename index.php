<!DOCTYPE html>
<html lang="en">
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<title>Portfolio: Douglas Lenz</title>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<!-- Bootstrap -->
    	<link href="assets/bootstrap-3.0.3/css/bootstrap.min.css" rel="stylesheet">
    	<link href="assets/css/master.css" rel="stylesheet">
	</head>
	<body>
		<div class="jumbotron">
			<div class="row">
				<div class="col-md-4">
					<img width="70" id="header-img" class="pull-right" src="assets/images/307714_2592807857782_1182231904_33173938_1087892500_a.jpg"/>
				</div>
				<div class="col-md-8">
					<h1 id="header-title">
						Portfolio: Douglas Lenz
					</h1><br>
					<p>A demonstration of significant work.</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<ul class="nav nav-pills nav-stacked" id="left-nav-column">
					  <li class="active"><a id="home-link" href="#home">Home</a></li>
					  <li><strong>Projects:</strong></li>
					  <li><a href="#" id="1">Novus Garage</a></li>
					  <li><a href="#" id="2">Realtime Coder</a></li>
					</ul>
				</div>
				<div class="col-md-8">
					<div id="home">
						<h2>Home</h2>
						<p>
							I am a Computer Science student at Indiana University Purdue University Indianapolis.
							Currently pursuing a Bachelor's of Science from Purdue School of Science. This portfolio
							should outline some of the more significant demonstrations of work I have done in the
							past.
						</p>
						<h4 style="display: inline;"><span class="label label-primary">Resume:</span> </h4> Right click <a href="download/Resume 11-2013.docx">this link</a> and choose "Save as..." to download my latest resume.
					</div>
					<div id="project" class="hidden">
						<h2>Project</h2>
						<p>
							Project Description
						</p>
					</div>
				</div>
			</div>
		</div>
		
		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://code.jquery.com/jquery.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="assets/bootstrap-3.0.3/js/bootstrap.min.js"></script>
	    <script>
	    	$(document).ready(function() {
	    		$(".nav a").click(function() {
	    			console.log("You clicked a nav link.");
	    			if($(this).attr("id") != "home-link"){
	    				$("#home").removeClass("visible");
	    				$("#home").addClass("hidden");
	    				$("#project").removeClass("hidden");
	    				$("#project").addClass("visible");
	    				console.log("You clicked a project link.");
	    				// Ajax call for data stuffs.
	    				$.ajax(
		    				{
		    					url: "assets/files/projects.php",
		    					data: { proj_number: $(this).attr("id") },
		    					cache: false,
		    					success: function(html)
		    					{
		    						$("#project").html(html);
		    					},
		    				});
	    			} else {
	    				$("#home").removeClass("hidden");
	    				$("#home").addClass("visible");
	    				$("#project").removeClass("visible");
	    				$("#project").addClass("hidden");
	    				console.log("You clicked the home link.");
	    			}
	    		});
	    		$(".nav li").click(function() {
	    			$(".nav li").removeClass("active");
	    			$(this).addClass("active");
	    		});
	    	});
	    </script>
	</body>
</html>