<?php
	$db =new mysqli("localhost:3360","root","","mcal132_cie2");
	
	if($db->connect_error){
		echo $db->connect_error;
		die('Sorry, Database connection error.');
	}
?>