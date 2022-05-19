<?php
session_start();
require "db/connect.php";
if(!isset($_SESSION['userid'])){
	header('location:login.php');
}
if(!isset($_SESSION["userid"]) && $_SESSION["userid"]==null){
	// Code Goes here

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
		<div class="row">
			<div class="col-lg-10">
				<h3>List of Issued Book </h3>
			</div>
			<div class="col-lg-2">
				<h3><a href="books.php" class="btn btn-success">Select Book</a></h3>
			</div>
		</div>
		<table  class="table">
			<tr>
				<th>Sr.</th>
				<th>Book Name</th>
				<th>Issue Date</th>
				<th>Due Date</th>
				<th>Return Date</th>
				<th>Action</th>
			</tr>
			<?php
			$userid = $_SESSION['userid'];
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
							<td><?=$count++?></td>
							<td><?=$row['title']?></td>
							<td><?=$row['issuedate']?></td>
							<td><?=$row['duedate']?></td>
							<td><?=$row['returndate']?></td>
							<td>
								<?php if($row['returnstatus']=="0"){?>
									<a href="book_return.php?issueid=<?php echo $row['issueid'];?>" onclick="return con();">Book Return</a>
								<?php }else{?>
									<a>Returned</a>
								<?php }?>
							</td>
						<?php

						echo '</tr>';
					}
				}
			}
			?>
		</table>
	</div>
	<script>
		function con(){
			return confirm("Are you sure to return this book?");
		}
		</script>
</body>

</html>