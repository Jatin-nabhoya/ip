<?php
	session_start();
	include("db/connect.php");
	
	if(!isset($_SESSION["userid"])){
		header("location:login.php");
	}
	
	$bookid= $_POST['bookid'];
	$userid= $_POST['userid'];
	$issuedate = date('Y-m-d');
	$duedate = date('Y-m-d', strtotime($issuedate . ' + 10 days'));
	
	//Write insert SQL Query
	$sql = "insert into bookissue (bookid, userid, issuedate,duedate,  returndate) values ('$bookid', '$userid', '$issuedate', '$duedate' , 'not returned')";

	$insert = $db->query($sql);
	header("location:issue.php");
?>