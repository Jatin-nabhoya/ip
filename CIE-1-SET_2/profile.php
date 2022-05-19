<?php
	session_start();
	require "db/connect.php";

	if(!isset($_SESSION["userid"])){
		header("location:login.php");
	}
	
	$userid = $_SESSION["userid"];
	$issuedbook = 0;
	$bookinlibrary = 0;
	$booksql ="select count(*) as total from books";
	$result = $db->query($booksql);
	$row = $result->fetch_assoc();
	$bookinlibrary = $row['total'];
	
	$issuesql = "select count(*) as total from bookissue where userid=$userid";
	$result = $db->query($issuesql);
	$row = $result->fetch_assoc();
	$issuedbook = $row['total'];
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
				<div class="text-white bg-info">
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
			<div class="col-sm-4">
				<div class="text-white bg-info">
					<div class="card-header">Books</div>
					<div class="card-body">
						<h4 class="card-title">Total Books in Library :  <?=$bookinlibrary;?></h4>
						<h4 class="card-title">Book Issued : <?=$issuedbook;?></h4>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>
			
			<div class="col-sm-8">
				<div class="text-white bg-info">
					<div class="card-header">Total Issued</div>
					<div class="card-body">
						<table class="text-white" width="100%">
							<tr>
								<th>Sr.</th>
								<th>Book</th>
								<th>Issued</th>
								<th>Due Date</th>
							</tr>
							<?php
							
							$query = "
									select 
										i.id as issueid,
										b.id,
										b.title,
										i.issuedate,
										i.duedate,
										i.returndate,
										i.returnstatus,
										i.fine
									from 
										bookissue as i
									Left Join
										books as b
									on
										i.bookid = b.id 
									where
										i.returnstatus = 0 and
										i.userid = $userid 
									order by
										i.id desc									
									";
							if($result = $db->query($query)){
								if($result->num_rows){
									$count = 1;
									while($row = $result->fetch_assoc()){
									?>
									<tr>
										<td><?=$count++;?></td>
										<td><?=$row['title']?></td>
										<td><?=$row['issuedate']?></td>
										<td><?=$row['duedate']?></td>
									</tr>
									<?php
									}
								}else{
									?>
									<tr>
										<td colspan=6 align='center'>Zero Book is issued.</td>
									</tr>
									
									<?php 
								}
							}
							?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include('footer.php');?>
</body>

</html>