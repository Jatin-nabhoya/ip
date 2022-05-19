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
			
			
			$("#username").focusout(function(){
				var username = $("#username").val();
		
				if(username==""){
					// alert("Please enter username");
					$("#uname").html("invalid username").show();
					
					return false;
				}else {
					$("#uname").hide();
					return true;
				}
		
			});
			$("#firstname").focusout(function(){
				var firstname = $("#firstname").val();
			if(firstname==""){
				// alert("Please enter firstname");
				$("#fname").html("invalid firstname").show();
				
	
				return false;
			}else {
					$("#fname").hide();
					return true;
				}});

			$("#lastname").focusout(function(){
				var lastname = $("#lastname").val();
				if(lastname==""){
					// alert("Please enter lastname");
					$("#lname").html("invalid lasttname").show();
				
					return false;
				}else {
					$("#lname").hide();
					return true;
				}});

			$("#password").focusout(function(){
				var password = $("#password").val();
			if(password=="" && password.length()<6){
				// alert("Please enter password");
				$("#pwd").html("invalid password").show();
				
				return false;
			}else {
					$("#pwd").hide();
					return true;
				}});

			$("#registrationform").submit(function(){
				//Form Validation
				var firstname = $("#firstname").val();
				var lastname = $("#lastname").val();
				var password = $("#password").val();
				
				if(firstname==""){
					alert("Please enter firstname");
					return false;
				}
				if(lastname==""){
					alert("Please enter lastname");
					return false;
				}
				if(password=="" && password.length()<6){
					alert("Please enter password");
					return false;
				}
				if(username==""){
					alert("Please enter username");
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
		<div class="card border-info mb-9" >
			<div class="card-header">Registration Form</div>
			<div class="card-body">
				
				<form action="save_register.php" method="post" id="registrationform">
					<fieldset>
						<div class="form-group ">
							<label for="staticEmail">First Name</label>			
							<input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter First Name" value="Rajesh">
							<span class="text-danger" id="fname"></span>
						</div>
						<div class="form-group ">
							<label for="lastname">Last Name</label>			
							<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter Last Name" value="Pandya">
							<span class="text-danger" id="lname"></span>
						</div>
						<div class="form-group ">
							<label for="staticEmail">Username</label>			
							<input type="text" class="form-control" name="username" id="username" placeholder="email@example.com" value="admin@gmail.com">
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							<span class="text-danger" id="uname"></span>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" name="password" aria-describedby="password" placeholder="Enter Password" value="123456">
							<span class="text-danger" id="pwd"></span>
						</div>
						<button type="submit" class="btn btn-info">Register</button>
						<button type="button" class="btn btn-danger" onClick="history.back();">Cancel</button>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</body>
</html>