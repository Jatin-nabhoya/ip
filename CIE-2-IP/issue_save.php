<?php 

session_start();
require "db/connect.php";

	$user = $_POST['user'];
	$return = $_POST['returndate'];

	$str = "insert into bookissue (bookid,userid,issuedate,returndate) values ($book,$user,'$issue','$return')";

	$db->query($str);
	header("location:issue.php");
?>
