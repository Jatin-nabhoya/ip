<?php

session_start();
include("db/connect.php");

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
		<h3>Book Issue Management</h3>
		<a href="issue_form.php" align="right" class="success button">Insert New Record</a>
		<table  class="table">
			<tr>
				<th>Sr.</th>
				<th>Book Name</th>
				<th>User Name</th>

				<th>Issue Date</th>
				<th>Return Date</th>
				<th>Action</th>
			</tr>
			<?php
			$query = "
					select 
						b.id,
						b.title,
						u.id,
						u.fname,
						u.lname,
						i.issuedate,
						i.returnstatus,
						i.fine
					from 
						books as b,
						users as u,
						bookissue as i
					where
						i.bookid = b.id and
						i.userid = u.id
					";

			if($result = $db->query($query)){
				if($result->num_rows){
					$count = 1;
					while($row = $result->fetch_assoc()){
						echo '<tr>';
						echo '<td>', $count++,'</td>';
						echo '<td>', $row['title'],'</td>';
						echo '<td>', $row['fname'],' ',$row['lname'],'</td>';
						echo '<td>', $row['issuedate'],'</td>';
						echo '<td>', $row['returnstatus'],'</td>';
						?>
						<td>
							<a href="issue_form.php?id=<?php echo $row['id'];?>">Edit</a>
						</td>
						<?php

						echo '</tr>';
					}
				}

			}
			?>
		</table>
	</div>
</body>

</html>