<?php
	//error_reporting(0);
	require 'db/connect.php';
	$id = (isset($_GET['id']))?$_GET['id']:0;
	
	$sql = "select * from users where id=$id";
	$result = $db->query($sql);
	$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Client Form</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<h2>Client Detail Form</h2>
			<form action="studentsave.php" method="post" id="clientform">
				<input type="hidden" name="id" value="<?php echo $row['id'];?>"/>
				<div class="form-group">
					<label for="firstname">First Name</label>
					<input type="text" class="form-control" value="<?php echo $row['first_name'];?>" id="firstname" placeholder="Enter First Name" name="firstname">
				</div>
				<div class="form-group">
					<label for="lastname">Last Name</label>
					<input type="text" class="form-control" value="<?php echo $row['last_name'];?>" id="lastname" placeholder="Enter Last Name" name="lastname">
				</div>
				<div class="form-group">
					<label for="bio">Bio:</label>
					<textarea class="form-control" id="Bio" placeholder="Enter Description" name="bio"><?php echo $row['bio'];?></textarea>
				</div>
				<button type="button" class="btn btn-default" onClick="history.back()">Cancel</button>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</body>
</html>
