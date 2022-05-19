<?php
	session_start();
	include("db/connect.php");
	$firstname= $_POST['firstname'];
	$lastname= $_POST['lastname'];
	$username= $_POST['username'];
	$password= $_POST['password'];
	$role= 'student'; // Default value.
		
	//Write SQL
	$sql = "insert into users (fname, lname, username, password , category) values ('$firstname', '$lastname', '$username', '$password', '$role')";

	$result = $db->query($sql);
	header("location:login.php");
?>