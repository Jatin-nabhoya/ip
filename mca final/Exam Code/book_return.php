<?php
	session_start();
	include("db/connect.php");
	
	$issueid = $_GET['issueid'];
	$returndate = date('Y-m-d');
	
	//Write update query to update status and return date
	$sql = "update bookissue set returndate = '$returndate', returnstatus = 'returned' where id = $issueid";
	$update = $db->query($sql);
	header("location:issue.php");
?>