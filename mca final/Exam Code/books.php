<?php
	session_start();
	require "db/connect.php";
	
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
			
			if(isset($_GET['search']) && $_GET['search']!=""){
				//Searching Functionality
				$search = $_GET['search'];
				$sql = "select id,titleurl,UPPER(author),UPPER(title) from books where title like '%".$search."%'";

			}else{
				$sql = "select id,titleurl,UPPER(author),UPPER(title) from books";
			}

			if($result = $db->query($sql)){
				if($result->num_rows){
					while($row = $result->fetch_assoc()){
						?>
						<tr>
							<td><?=$row['id']?></td>
							<td><img height="70" src="<?=$row['titleurl']?>"></td>

							<td><?=$row['UPPER(title)']?></td>
							<td><?=$row['UPPER(author)']?></td>
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