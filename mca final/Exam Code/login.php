<?PHP
session_start();
if(isset($_SESSION["userid"])){
	header("location:index.php");
}
?>
<html>
<head>
	<link href="css/bootstrap.min.css"  rel="stylesheet" />
	<script src="js/jquery.min.js" ></script>
	<script>
		$("document").ready(function(){
			$("#loginform").submit(function(){
				//Form Validation
				var username = $("#username").val();
				var password = $("#password").val();
				if(username ==""){
					alert("Please enter valid username ")
					return false;
				}
				if(password ==""){
					alert("Please enter valid password ")
					return false;
				}
				
			});
		});
	</script>
</head>
<body>
	<div class="btn btn-primary btn-info btn-lg btn-block">Library Management</div>
	
	<div class="container ">
		<br>
		<div class="card border-primary mb-9" >
			<div class="card-header">Login Form</div>
			<div class="card-body">
				
				<form action="validateuser.php" method="post" id="loginform">
					<fieldset>
						<div class="form-group ">
							<label for="staticEmail">Username</label>			
							<input type="text" class="form-control" name="username" id="username" placeholder="email@example.com" value="admin@gmail.com">
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" name="password" aria-describedby="password" placeholder="Enter Password" value="123456">
						</div>
						<button type="submit" class="btn btn-info">Submit</button>
						<button type="reset" class="btn btn-info">Reset</button>
						</br></br>If not user? <a href="register.php">Register From Here </a>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</body>
</html>