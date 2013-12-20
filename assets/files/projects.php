<?php

	$projects = array(
		array( // Project 1: Novus Garage
			'name'=>'Novus Garage', 
			'description'=>'A web service for car owners that increases their accountability by giving them the power to manage the information inherently intricate to car ownership with ease. At the heart of awareness is proper organization of information. Owning a car is an investment that directly benefits from the car owner’s personal contribution to maintaining their automobiles. However, life presents the average person with many other concerns. Thus, responsible car ownership should be a breeze.', 
			'type'=>'Website / Web application', 
			'partners'=>'Kyle Burkholder, Nam Chau',
			'platform'=>'Web', 
			'languages'=>'HTML, CSS, Javascript, PHP',
			'resource_type'=>'link',
			'resource_location'=>'http://novusgarage.x10.mx'
		),
		array( // Project 2: Realtime Coder Web App
			'name'=>'Realtime Coder Web App', 
			'description'=>'A small and easy HTML/Javascript/CSS coding environment running within the browser that offers a live preview of the results of the code as the user writes it. Has the option to save completed files.', 
			'type'=>'Testing', 
			'partners'=>'None',
			'platform'=>'Web application', 
			'languages'=>'HTML, CSS, Javascript, PHP',
			'resource_type'=>'link',
			'resource_location'=>'http://dougsprojects.x10.mx/projects/rtc/'
		),
		array( // Project 3: Peak
			'name'=>'Peak',
			'description'=>'An example of a recursive divide-and-conquer solution to finding the "peak" value in an array with the following properties: the array of integers is of any length and its elements ascend to a certain value, after which the elements decrease. Values are read from a text file within which the integers are listed one per line.',
			'type'=>'Software / Algorithm design',
			'partners'=>'None',
			'platform'=>'Windows, Mac, Linux',
			'languages'=>'C++',
			'resource_type'=>'file',
			'resource_location'=>'assets/download/peak.cpp'		
		)
	);
	
	if(isset($_GET['proj_number'])) {
		$n = $_GET['proj_number']-1;
		
		echo '
			<h3>Project name: </h3><h4>'. $projects[$n]['name'] . '</h4>
			<div class="well">
				<h3>Description:</h3>
				<p>' . $projects[$n]['description'] . '</p>
				<h3>Type:</h2>
				<p>' . $projects[$n]['type'] . '</p>
				<h3>Partners:</h3>
				<p>' . $projects[$n]['partners'] . '</p>
				<h3>Languages used:</h3>
				<p>' . $projects[$n]['languages'] . '</p>
				<h3>Resource:</h3>
				'; if($projects[$n]['resource_type'] == 'link') {
					echo '<p><a target="_blank" href="'. $projects[$n]['resource_location'] . '">' . $projects[$n]['name'] . '</a></p>';
				} else {
					echo 'This is a downloadable resource. Right click and click "Save as...": <p><a href="' . $projects[$n]['resource_location'] . '">' . $projects[$n]['name'] . '</a></p>';
				} 
		echo ' 
			</div>
		';
	} else {
		echo 'Data for this project doesn\'t exist yet.';
	}

?>