<?php
	session_start();
	require "db/connect.php";

	$totaluser = 0;
	$totalbooks = 0;
	
	$usersql = "select count(*) as total from users";
	$result = $db->query($usersql);
	$row = $result->fetch_assoc();
	$totaluser = $row['total'];
	
	
	$booksql = "select count(*) as total from books";
	$result = $db->query($booksql);
	$row = $result->fetch_assoc();
	$totalbooks = $row['total'];
?>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<script src="js/jquery.min.js"></script>
	<style>
</style>
</head>
<body>
	<?php include "nav.php"; ?>
	<div class="container">
		<br>
		<?php if(isset($_SESSION['userid'])){?>
		<div class="row">
			<div class="col-sm-12">
				<div class="text-white bg-primary bg-info">
					<div class="card-header">
						<h3>
							<?php echo "Welcome, ".$_SESSION['username'];?>
						</h3>
					</div>
				</div>
			</div>
		</div>
		<br>
		<?php } ?>
		<div class="row">
			<div class="col-sm-6">
				<div class="text-white bg-primary bg-info">
					<div class="card-header">Users</div>
					<div class="card-body">
						<h2 class="card-title">Total No of Users : <?=$totaluser;?></h2>
						<h5 class="card-text">Total number of user who have registered them selves with this website.</h5>
					</div>
				</div>
			</div>
			
			<div class="col-sm-6">
				<div class=" text-white bg-primary bg-info">
					<div class="card-header">Books</div>
					<div class="card-body">
						<h2 class="card-title">Total No of Books :  <?=$totalbooks;?></h2>
						<h5 class="card-text">Total number of books available in this website to issue.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include('footer.php');?>
</body>

</html>