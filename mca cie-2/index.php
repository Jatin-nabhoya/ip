<?php
session_start();
// require "db/connect.php";
include("db/connect.php");

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
		<div class="row">
			<div class="col-sm-12">
				<div class="text-white bg-primary">
					<div class="card-header">
						<h3>
							<?php echo "Welcome,";?>
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
						<h4 class="card-title">Total No of Users :</h4>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class=" text-white bg-primary">
					<div class="card-header">Books</div>
					<div class="card-body">
						<h4 class="card-title">Total No of Books :</h4>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>