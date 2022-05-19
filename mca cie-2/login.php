<?PHP
session_start();
if (isset($_SESSION["username"])) { header("location:index.php"); }
?>
<html>

<head>
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<script src="js/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			//Validation Code Goes Here
			$('#loginform').submit(function(){
				$username =$("#staticEmail").val();
				$password =$("#password").val();

				if ($username==''){ 
					alert("Please enter valid username !!")
				}
				if ($password==''){
					alert("Please enter valid password !!")
				}
			});
		});
	</script>
</head>

<body>
	<div class="container ">
		<div class="row">
			<span class="btn btn-primary btn-lg mb-3 mt-3">Library Management</span>
			<br>
			<div class="card border-primary mt-9">
				<div class="card-header">Login Form</div>
				<div class="card-body">
					<form action="validateuser.php" method="post" id="loginform">
						<fieldset>
							<div class="form-group ">
								<label for="staticEmail">Username</label>
								<input type="text" class="form-control" name="username" id="staticEmail" placeholder="email@example.com" value="admin@gmail.com">
								<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" name="password" aria-describedby="password" placeholder="Enter Password" value="123456">
							</div>
							<div class="form-group mt-3">
								<button type="submit" class="btn btn-primary">Submit</button>
								<button type="reset" class="btn btn-primary">Reset</button>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>