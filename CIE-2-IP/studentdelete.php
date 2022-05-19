<?php
	require 'db/connect.php';
	$id = (isset($_GET['id']))?$_GET['id']:0;
	
	//$sql = Write delete query
	//$result = Execute delete query;
	header("location:index.php");
?>