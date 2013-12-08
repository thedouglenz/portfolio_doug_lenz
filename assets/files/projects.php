<?php

	$projects = array(
		array( // Project 1: Novus Garage
			'name'=>'Novus Garage', 
			'description'=>'A web service for car owners that increases their accountability by giving them the power to manage the information inherently intricate to car ownership with ease. At the heart of awareness is proper organization of information. Owning a car is an investment that directly benefits from the car owner’s personal contribution to maintaining their automobiles. However, life presents the average person with many other concerns. Thus, responsible car ownership should be a breeze.', 
			'type'=>'Website / Web application', 
			'platform'=>'Web', 
			'languages'=>'HTML, CSS, Javascript, PHP'
		),
		array( // Project 2: Realtime Coder Web App
			'name'=>'Realtime Coder Web App', 
			'description'=>'A small and easy HTML/Javascript/CSS coding environment running within the browser that offers a live preview of the results of the code as the user writes it. Has the option to save completed files.', 
			'type'=>'Testing', 
			'platform'=>'Web application', 
			'languages'=>'HTML, CSS, Javascript, PHP'
		),
		
	);
	
	if(isset($_GET['proj_number'])) {
		$n = $_GET['proj_number']-1;
		
		echo '
			<h3>Project name: </h3><h4>'. $projects[$n]['name'].'</h4>
			<div class="well">
				<h3>Description:</h3>
				<p>' . $projects[$n]['description'] . '</p>
				<h3>Type:</h2>
				<p>' . $projects[$n]['type'] . '</p>
				<h3>Languages used:</h3>
				<p>' . $projects[$n]['languages'] . '</p>
			</div>
		';
	} else {
		echo 'Data for this project doesn\'t exist yet.';
	}

?>