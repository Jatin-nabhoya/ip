<?php
session_start();
if(!isset($_SESSION["username"]) && $_SESSION["username"]==null){
	header("location:login.php");
}
$username= $_SESSION["username"];
require("db/connect.php");
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
		<div class="row">
			<div class="col-sm-12">
				<div class="text-white bg-primary">
					<div class="card-header">
						<h3>
							<?php echo "Welcome, ".$_SESSION['username'];?>
						</h3>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6">
				<div class="text-white bg-primary">
					<div class="card-header">Users</div>
					<div class="card-body">
						<?php 
							$sqluser = "select count(*) as totaluser from users";
							$result = $db->query($sqluser);
							$row = $result->fetch_assoc();
							$totaluser = $row['totaluser'];
						?>
						<h4 class="card-title">Total No of Users : <?=$totaluser;?></h4>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class=" text-white bg-primary">
					<div class="card-header">Books</div>
					<div class="card-body">
					
						<?php 
							$sqlbook = "select count(*) as totalbook from books";
							$result = $db->query($sqlbook);
							$row = $result->fetch_assoc();
							$totalbook = $row['totalbook'];
						?>
						<h4 class="card-title">Total No of Books : <?=$totalbook?></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>