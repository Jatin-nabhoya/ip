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
		<h3>User Management</h3>
		<a href="users_form.php" align="right" class="success button">Insert New Record</a>
		<table  class="table">
			<tr>
				<th>Sr.</th>
				<th>Name</th>
				<th>Username</th>
				<th>Password</th>
				<th>Category</th>
				<th>Action</th>
			</tr>
			<?php
			$sql = "select id,CONCAT (fname,' ',lname) as fullname,LOWER(username), password, category from users";
			if($result = $db->query($sql)){
				if($result->num_rows){
					$count = 1;
					while($row = $result->fetch_assoc()){
						echo '<tr>';
						echo '<td>', $count++,'</td>';
						echo '<td>', $row['fullname'],'</td>';
						echo '<td>', $row['LOWER(username)'],'</td>';
						echo '<td>', $row['password'],'</td>';
						echo '<td>', $row['category'],'</td>';
						?>
						<td>
							<a href="users_form.php?id=<?php echo $row['id'];?>">Edit</a>
							<a href="users_delete.php?id=<?php echo $row['id'];?>">Delete</a>
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