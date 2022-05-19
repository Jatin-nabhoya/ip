<?php 
	session_start();
	require "db/connect.php";

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$category = $_POST['category'];
	$id = $_POST['id'];
	echo $id;

	$sql="";
	if(isset($id) && $id!=""){
		$sql = "update users set fname='$fname',lname='$lname', username='$username',password='$password',category='$category' where id=$id";
	}else{
		$sql ="insert into users (fname,lname, username,password,category) values('$fname','$lname','$username','$password','$category')";
	}

	$db->query($sql);
	header("location:users.php");
?>