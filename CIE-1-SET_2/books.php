<?php
	session_start();
	require "db/connect.php";
	
	//Login page code goes here
	if (!isset($_SESSION['userid'])){
		header("Location:login.php");
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
		<form action="" method="GET">
			<div class="row">
				<div class="col-lg-8">
					<h3>Book Management</h3>
				</div>
				<div class="col-lg-2">
					<input type="text" name="search" class="form-control" placeholder="Search Book">
				</div>
				<div class="col-lg-2">
					<input type="submit" class="btn btn-success" value="Search Book">			
				</div>
			</div>
		</form>
		<table  class="table">
			<tr>
				<th>ID</th>
				<th>Image</th>
				<th>Book Title</th>
				<th>Author</th>
				<th>Action</th>
			</tr>
			<?php
			$sql="";
			if(isset($_GET['search']) && $_GET['search']!=""){
				//Searching Functionality
				$searchstring = $_GET['search'];
				$sql = "select * from books where 
							title like '%$searchstring%' or
							author like '%$searchstring%' or
							id like '%$searchstring%'";
							
			}else{
				$sql = "select id,titleurl,UPPER(title) as title,UPPER(author) as author from books";
			}
			if($result = $db->query($sql)){
				if($result->num_rows){
					while($row = $result->fetch_assoc()){
						?>
						<tr>
							<td><?=$row['id']?></td>
							<td><img height="70px" src="<?=$row['titleurl']?>"/></td>
							<td><?=$row['title']?></td>
							<td><?=$row['author']?></td>
							<td>
								<a href="book_detail.php?id=<?=$row['id']?>">Book Detail</a>
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