<?php 
	require 'db/connect.php';
	$id = (isset($_GET['id']))?$_GET['id']:0;

	if($id!=0){
		//Code Goes Here
	}

	header("location:books.php");

?>