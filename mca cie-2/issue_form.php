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
			<div class="card-header">Book Issue</div>
			<div class="card-body">
				
				<form action="issue_save.php" method="post">
					<fieldset>
						<div class="form-group ">
							<label for="book">Select Book</label>
							<select class="form-control" id="book" name="book">
								<option>Select Book</option>
								<?php
									$query = "select * from books";
									if($result = $db->query($query)){
										if($result->num_rows){
											$count = 1;
											while($row = $result->fetch_assoc()){
												?>
													<option value="<?php echo $row['id'];?>">
														<?php echo $row['title']; ?>
													</option>
												<?php
											}
										}
									}
								?>
							</select>
						</div>
						<div class="form-group ">
							<label for="user">Select User</label>
							<select class="form-control" id="user" >
								<option>Select User</option>
								<?php
									$query = "select * from users where category=2";
									if($result = $db->query($query)){
										if($result->num_rows){
											$count = 1;
											while($row = $result->fetch_assoc()){
												?>
													<option value="<?php echo $row['id'];?>">
														<?php echo $row['fname'],' ',$row['lname']; ?>
													</option>
												<?php
											}
										}
									}
								?>
							</select>
							</select>
						</div>
						<div class="form-group ">
							<label for="issuedate ">Issue Date</label>
							<input type="date" class="form-control" name="issuedate" id="issuedate" placeholder="yyyy-mm-dd" value="" >
						</div>
						<div class="form-group">
							<label for="returndate">Return Date</label>
							<input type="date" class="form-control" id="returndate" placeholder="Enter Password" value=''>
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