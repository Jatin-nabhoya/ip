<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	<a class="navbar-brand" href="index.php">Library Management</a>
	<div class="collapse navbar-collapse" id="navbarColor01">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="index.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="books.php">Books</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="users.php">Users</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="logout.php" >Logout</a>
			</li>
		</ul>
	</div>
	<?php 
		$logincount=$_COOKIE['logincount'];
		//Cookie code goes here
		// if(isset($_COOKIE['logincount'])){
		// 	$logincount = $_COOKIE['logincount'];
		// 	$logincount++;
		// }
		
	
	?>
	<span style="float:right;color:white"><b>Total <?php echo $logincount;?> time user logged in. </b></span>
</nav>