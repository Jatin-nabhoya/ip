<?PHP
session_start();
// if(isset($_SESSION["username"])){
// 	header("location:index.php");
// }
?>
<html>
<head>
	<link href="css/bootstrap.min.css"  rel="stylesheet" />
	<script src="js/jquery.min.js" ></script>
	<style>
		.err{
			color:red;
		}
	</style>
	<script>
		$("document").ready(function(){
			$("#loginform").submit(function(){
				//Form Validation
				
			});
		});
	</script>
</head>
<body>
	<div class="container ">
		<button type="button" class="btn btn-primary btn-lg btn-block">Library Management</button>
		<br>
		<div class="card border-primary mb-9" >
			<div class="card-header">Login Form 
				<div class="err">
					- Username must be email address</br>
					- Password must be of 8 to 16 in length
				</div>
			</div>
			<div class="card-body">
				
				<form action="validateuser.php" method="post" id="loginform">
					<fieldset>
						<div class="form-group ">
							<label for="staticEmail">Username</label>			
							<input type="text" class="form-control" name="username" id="username" placeholder="email@example.com" value="rajesh@gmail.com">
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" name="password" aria-describedby="password" placeholder="Enter Password" value="123456">
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