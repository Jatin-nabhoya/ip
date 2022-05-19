<?php
	require 'db/connect.php';
	
	//Question 3 use php function to save firstname in upper case only.
	$firstname = $_POST['firstname'];
	//Question 3 use php function to save firstname in lower case only.
	$lastname = $_POST['lastname'];
	$bio = $_POST['bio'];
	$id = $_POST['id'];
	
	$sql="";
	if(isset($id) && $id!=""){
		//$sql = Update query
	}else{
		$sql = "insert into users (first_name, last_name, bio) values('$firstname','$lastname','$bio')";
	}
	$insert = $db->query($sql);
	header("location:index.php");
?>