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
		<div class="card border-primary mb-9" >
			<div class="card-header">Add / Edit Users</div>
				<div class="card-body">
				<form action="users_save.php" method="post">
					<input type="hidden" name="id" value=""/>
					<fieldset>
						<div class="form-group ">
							<label for="fname ">First Name</label>
							<input type="text" class="form-control" name="fname" id="fname" placeholder="Enter Your First Name" value="">
						</div>
						<div class="form-group ">
							<label for="lname ">Last Name</label>
							<input type="text" class="form-control" name="lname" id="lname" placeholder="Enter Your Last Name" value="" >
						</div>
						<div class="form-group ">
							<label for="username ">Username</label>
							<input type="email" class="form-control" name="username" id="username" placeholder="email@gmail.com" value="" >
						</div>
						<div class="form-group ">
							<label for="password ">Password</label>
							<input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password" value="" >
						</div>
						<div class="form-group ">
							<label for="category">Category</label>
							<select class="form-control" id="category" name="category">
								<option >Select Category</option>
								<option value="Student">Student</option>
								<option value="Admin">Admin</option>
							</select>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
						<button type="reset" class="btn btn-primary">Reset</button>
					</fieldset>
				</form>
				
			</div>
		</div>
	</div>
</body>

</html>