<?php
	//error_reporting(0);
	require 'db/connect.php';
	$id = (isset($_GET['id']))?$_GET['id']:0;
	
	$sql = "select * from books where id=$id";
	$result = $db->query($sql);
	$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Client Form</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>
		<?php include("nav.php"); ?>
		<div class="container">
		<br>
		<h2>Book Management</h2>
			<form action="books_save.php" method="post" id="clientform">
				<input type="hidden" name="id" value="<?php echo $row['id'];?>"/>
				<div class="form-group">
					<label for="title">Book Title</label>
					<input type="text" class="form-control" value="<?php echo $row['title'];?>" id="title" placeholder="Enter Book Title" name="title">
				</div>
				<div class="form-group">
					<label for="author">Book Author</label>
					<input type="text" class="form-control" value="<?php echo $row['author'];?>" id="lastname" placeholder="Enter Book Author" name="author">
				</div>
				<div class="form-group">
					<label for="price">Book Price</label>
					<input type="text" class="form-control" value="<?php echo $row['price'];?>" id="price" placeholder="Enter Book Price" name="price">
				</div>
				<div class="form-group">
					<label for="stock">Book Stock</label>
					<input type="text" class="form-control" value="<?php echo $row['stock'];?>" id="stock" placeholder="Enter Book Stock" name="stock">
				</div>

				<button type="button" class="btn btn-default" onClick="history.back()">Cancel</button>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</body>
</html>
