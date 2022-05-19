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
		<br>
		<h2>Book Management</h2>
		<a href="books_form.php" align="right" class="success button">Insert New Record</a>
		<table  class="table">
			<tr>
				<th>Book ID</th>
				<th>Book Title</th>
				<th>Author</th>
				<th>price</th>
				<th>Stock</th>
				<th>Created</th>
				<th>Action</th>
			</tr>
			<?php
			if($result = $db->query("select * from books")){
				if($result->num_rows){
					while($row = $result->fetch_assoc()){
						echo '<tr>';
						echo '<td>', $row['id'],'</td>';
						echo '<td>', $row['title'],'</td>';
						echo '<td>', $row['author'],'</td>';
						echo '<td>', $row['price'],'</td>';
						echo '<td>', $row['stock'],'</td>';
						echo '<td>', $row['datetime'],'</td>';
						?>
						<td>
							<a href="books_form.php?id=<?php echo $row['id'];?>">Edit</a>
							<a href="books_delete.php?id=<?php echo $row['id'];?>" onClick="return confirm('Do you want to delete?');">Delete</a>
						</td>
						<?php
						echo '</tr>';
					}
				}
			}
			?>
		</table>
	</div>
</body>

</html>