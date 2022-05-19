 <?php
	$db = new mysqli('localhost:3360','root','','mcal132_tsee');
	date_default_timezone_set("Asia/Kolkata");
	if($db->connect_errno){
		echo $db->connect_error;
		die('Sorry, Database connection error.');
	}


?>