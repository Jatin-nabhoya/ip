<nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-info">
	<a class="navbar-brand" href="index.php">Library Management</a>
	<div class="collapse navbar-collapse" id="navbarColor01">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="index.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="books.php">Books</a>
			</li>
			<?php if(isset($_SESSION['userid'])){?>
				<li class="nav-item">
					<a class="nav-link" href="profile.php">Profile</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="logout.php" >Logout</a>
				</li>
			<?php } ?>
		</ul>
	</div>
</nav>