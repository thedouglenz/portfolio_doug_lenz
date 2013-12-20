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
					<p>A demonstration of significant work</p>
				</div>
			</div>
		</div>
		
		<div class="container" id="main-content">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<ul class="nav nav-pills nav-stacked" id="left-nav-column">
					  <li class="active"><a id="home-link" href="#home">Home</a></li>
					  <li><strong>Projects:</strong></li>
					  <li><a href="#" id="1">Novus Garage</a></li>
					  <li><a href="#" id="2">Realtime Coder</a></li>
					  <li><a href="#" id="3">Peak</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-8">
					<div id="home">
						<h2>Home</h2>
						<p>
							I am a Computer Science student at Indiana University Purdue University Indianapolis.
							Currently pursuing a Bachelor's of Science from Purdue School of Science. This portfolio
							should briefly exhibit some of the more significant examples of work I have done in the
							past. Please enjoy this ad-free portfolio!
						</p>
						<p>
							I've developed this website from scratch for myself using the help of <a href="http://getbootstrap.com/">Bootstrap 3</a>
							to assist with the design. It uses PHP on the backend to serve data associated with each project and automatically
							populates the right hand column with project details via an ajax call. 
						</p>
						<p>
							On my resume, I list a few programming languages and technologies that I feel I understand to a moderate degree. I don't,
							however, claim to "know" any programming languages as I feel that such a statement is both inadequately strong and irrelevant.
							I do purport to understand the software/hardware interface and the elements/techiniques of high-level computer programming languages
							to an extent that qualifies me to learn and master projects regardless of the language I choose to use. This is also a strong
							statement but it means more to me than to say I "know" this language and this langauge and this one... 
						</p>
						<p>
							Certain languages do spark
							my interest and I'm often tempted to use and research them. Examples of such are C and C++. I have for them a particular fondness as someone
							might have with some TV series. I don't know as much as Bjarne Stroustrup (the creator of C++) but I sure do enjoy utilizing 
							his creation and its close predecessor. Much the same, a person might love to watch a certain TV program but would never know the
							trivial (or perhaps incredibly significant) things that the creator knows.
						</p> 
						<h2>R&eacute;sum&eacute;</h2>
						Right click <a href="download/Resume 11-2013.docx">this link</a> and choose "Save as..." to download my latest r&eacute;sum&eacute;.
						<h3>Or click this button &rarr; <a class="btn btn-success" href="download/Resume 11-2013.docx"> <strong>Download</strong> </a></h3>
						<h2>Contact Information:</h2>
						<div class="panel panel-default">
							<div class="panel-body">
								<p>
								<strong>Douglas Lenz</strong><br>
								7166 Constitution Dr. Apt D<br>
								Indianapolis, IN 46256<br>
								Phone: 317-657-1808<br>
								Email: thedouglenz@gmail.com<br>
								LinkedIn: <a href="http://www.linkedin.com/pub/douglas-lenz/2b/3a1/833/">linkedin.com/pub/douglas-lenz/2b/3a1/833/</a>
							</p>
							</div>
						</div>					
					</div>
					<div id="project" class="hidden">
						<h2>Loading...</h2>
						<p>
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