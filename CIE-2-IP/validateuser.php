<?php
	session_start();
	include("db/connect.php");
	$username= $_POST['username'];
	$password= $_POST['password'];
	$rememberme = isset($_POST["rememberme"])?$_POST["rememberme"]:"";
		
	$sql = "select * from users where username='$username' and password='$password'";
	$result = $db->query($sql);
	
	if($result->num_rows > 0){
		
		$row = $result->fetch_assoc();
		$username = $row['username'];
		$category = $row['category'];
		
		$_SESSION["username"] = $username;
		$_SESSION["category"] = $category;
				
		//Cookie Code goes here
		
		header("location:index.php");
	}else{
		header("location:login.php");
	}
	
?>