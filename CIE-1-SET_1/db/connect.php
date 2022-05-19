<?php
	$db = new mysqli('localhost:3360','root','','ce423_rku_cie12');
	
	if($db->connect_errno){
		echo $db->connect_error;
		die('Sorry, Database connection error.');
	}
?>