<?php
	session_start();
	require "db/connect.php";
	$id=null;
	$row=null;
	
	if(isset($_GET) && isset($_GET['id'])){
		$id = $_GET['id'];
	}else{
		header("location:books.php");
	}
	
	$result = $db->query("select * from books where id=".$id);
	if($result->num_rows){
		$row = $result->fetch_assoc();
	}else{
		header("location:books.php");
	}
?>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<script src="js/jquery.min.js"></script>
	<style>
</style>
</head>
<body>
	<?php include("nav.php"); ?>
	<div class="container">

		<br>
		<h2>Book Detail</h2>
		<table  class="table" border=1>
			<tr >
				<th rowspan="6" width="200px"><img src="<?=$row['titleurl']?>" height="265px" 
				width="200px"/></th>
			</tr>
			<tr>
				<th>Book ID</th>
				<td><?=$row['id']?></td>
			</tr>
			<tr>			
				<th>Book Title</th>
				<td><?=$row['title']?></td>
			</tr>
			<tr>			
				<th>Author</th>
				<td><?=$row['author']?></td>
			</tr>
			<tr>			
				<th>Price</th>
				<td><?=$row['price']?></td>
			</tr>
			<tr>
				<th>Stock</th>
				<td><?=$row['stock']?></td>
			</tr>
		</table>
	</div>
</body>

</html>