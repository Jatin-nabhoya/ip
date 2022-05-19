<?php 
	session_start();
	require "db/connect.php";

	$title = $_POST['title'];
	$author = $_POST['author'];
	$price = $_POST['price'];
	$stock = $_POST['stock'];
	$id = $_POST['id'];

	$sql="";
	if(isset($id) && $id!=""){
		$sql = "update books set title = '$title',author='$author',price=$price,stock=$stock where id=$id";
	}else{
		$sql = "insert into books (title,author,price,stock) values('$title','$author',$price,$stock)";
	}
	$insert = $db->query($sql);
	header("location:books.php");
?>