<?php
session_start();
require "db/connect.php";

if(!isset($_SESSION["username"]) && $_SESSION["username"]==null){
	header("location:login.php");
}
$username= $_SESSION["username"];
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
		<br/>
		<div class="row">
			<div class="col-lg-4">
				<h2>Book Management</h2>
			</div>
			<div class="col-lg-4">
				<a href="books_form.php" class="btn btn-primary">Add Book</a>
			</div>
		</div>
		<table  class="table">
			<tr>
				<th>Book ID</th>
				<th>Book Title</th>
				<th>Author</th>
				<th>Price</th>
				<th>Stock</th>
				<th>Created</th>
				<th>Action</th>
			</tr>
			<!-- Code goes here -->
			<?php
			 foreach($db->query("select * from books where price<250") as $row){
				
			?>
			<tr>
				<td><?= $row['id']?></td>
				<td><?= $row['title']?></td>
				<td><?= $row['author']?></td>
				<td><?= $row['price']?></td>
				<td><?= $row['stock']?></td>
				<td><?= $row['datetime']?></td>
				<td>
				 <a href="#" class="btn btn-warning">Edit</a>
				 <a href="#" class="btn btn-danger">delete</a>
				</td>

			 </tr>
			<?php } ?>
		</table>
	</div>
</body>

</html>