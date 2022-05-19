<?PHP
session_start();
if(isset($_SESSION["username"])){
	header("location:index.php");
}
?>
<html>
<head>
	<link href="css/bootstrap.min.css"  rel="stylesheet" />
	<script src="js/jquery.min.js" ></script>
	<script>
		$("document").ready(function(){
			$("#registrationform").submit(function(){
				var username = $("#username").val();
				var password = $("#password").val();
				var firstname = $("#firstname").val();
				var lastname = $("#lastname").val();
				if(username ==""){
					alert("Please enter valid username ")
					return false;
				}
				if(password ==""){
					alert("Please enter valid password ")
					return false;
				}
				if(firstname ==""){
					alert("Please enter valid firstname ")
					return false;
				}
				if(lastname ==""){
					alert("Please enter valid lastname ")
					return false;
				}
			});
		});
	</script>
</head>
<body>
	<div class="btn btn-info btn-lg btn-block">Library Management</div>
	<div class="container ">
		<br>
		<div class="card border-primary mb-9" >
			<div class="card-header">Registration Form</div>
			<div class="card-body">
				
				<form action="save_register.php" method="post" id="registrationform">
					<fieldset>
						<div class="form-group ">
							<label for="staticEmail">First Name</label>			
							<input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter First Name" value="Rajesh">
						</div>
						<div class="form-group ">
							<label for="lastname">Last Name</label>			
							<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter Last Name" value="Pandya">
						</div>
						<div class="form-group ">
							<label for="staticEmail">Username</label>			
							<input type="text" class="form-control" name="username" id="username" placeholder="email@example.com" value="admin@gmail.com">
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" name="password" aria-describedby="password" placeholder="Enter Password" value="123456">
						</div>
						<button type="submit" class="btn btn-primary btn-info">Register</button>
						<button type="button" class="btn btn-primary btn-info" onClick="history.back();">Cancle</button>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</body>
</html>