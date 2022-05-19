<?php 
session_start();
require "db/connect.php";

$id = (isset($_GET['id']))?$_GET['id']:0;

if($id!=0){
	$str = "delete from users where id=$id";
	$db->query($str);
}

header("location:users.php");

?>