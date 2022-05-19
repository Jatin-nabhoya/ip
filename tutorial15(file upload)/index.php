<?php

    include("include/header.php");
    include('db.php');

    if(!isset($_SESSION['email'])){
        
        header('location:login.php');
        
    }

    $r = isset($_SESSION['insertresult'])? $_SESSION['insertresult'] : "";
    $color = isset($_SESSION['color'])? "text-success" : "text-danger";
    unset($_SESSION['color']);
    unset($_SESSION['insertresult']);

    $updateresult = isset($_SESSION['updateresult'])? $_SESSION['updateresult'] : "";
    $ucolor = isset($_SESSION['ucolor'])? "text-success" : "text-danger";
    unset($_SESSION['ucolor']);
    unset($_SESSION['updateresult']);

    $deleteresult = isset($_SESSION['deleteresult'])? $_SESSION['deleteresult'] : "";
    $dcolor = isset($_SESSION['deletecolor'])? "text-success" : "text-danger";
    unset($_SESSION['deletecolor']);
    unset($_SESSION['deleteresult']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-warning" style="user-select: auto;">
  <div class="container-fluid" style="user-select: auto;">
    <a class="navbar-brand" href="#" style="user-select: auto;">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="user-select: auto;">
      <span class="navbar-toggler-icon" style="user-select: auto;"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01" style="user-select: auto;">
      <ul class="navbar-nav me-auto" style="user-select: auto;">
        <li class="nav-item" style="user-select: auto;">
          <a class="nav-link active" href="#" style="user-select: auto;">Home
            <span class="visually-hidden" style="user-select: auto;">(current)</span>
          </a>
        </li>
        <li class="nav-item" style="user-select: auto;">
          <a class="nav-link text-light" href="#" style="user-select: auto;">Features</a>
        </li>
        <li class="nav-item" style="user-select: auto;">
          <a class="nav-link text-light" href="#" style="user-select: auto;">Pricing</a>
        </li>
        <li class="nav-item" style="user-select: auto;">
          <a class="nav-link text-light" href="#" style="user-select: auto;">About</a>
        </li>
        <li class="nav-item dropdown" style="user-select: auto;">
          <a class="nav-link dropdown-toggle text-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="user-select: auto;">Dropdown</a>
          <div class="dropdown-menu" style="user-select: auto;">
            <a class="dropdown-item" href="#" style="user-select: auto;">Action</a>
            <a class="dropdown-item" href="#" style="user-select: auto;">Another action</a>
            <a class="dropdown-item" href="#" style="user-select: auto;">Something else here</a>
            <div class="dropdown-divider" style="user-select: auto;"></div>
            <a class="dropdown-item" href="#" style="user-select: auto;">Separated link</a>
          </div>
        </li>
        <li class="nav-item" style="user-select: auto;">
          <a class="nav-link text-light" href="registration.php" style="user-select: auto;">Add</a>
        </li>
        <li class="nav-item" style="user-select: auto;">
          <a class="nav-link text-light" href="logout.php" style="user-select: auto;">Logout</a>
        </li>
      </ul>
      <form class="d-flex" style="user-select: auto;">
        <input class="form-control me-sm-2 me-2" type="text" placeholder="Search" style="user-select: auto;">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit" style="user-select: auto;">Search</button>
      </form>
    </div>
  </div>
</nav>
  
<div class="container mx-auto" style="margin-top: 50px;">

  <!-- <a class="btn btn-primary" href="logout.php" style="margin-left: 5px; float: right;">Logout</a>
  <a href="registration.php" style="float: right;" class="btn btn-success mb-2">Add</a> -->
<h2>User Data</h2>

<h3 class="<?=$color?>"><?=$r?></h3>
<h3 class="<?=$dcolor?>"><?=$deleteresult?></h3>
<h3 class="<?=$ucolor?>"><?=$updateresult?></h3>
  
  <table class="table table-bordered table-striped">
			<thead>
				<tr style="text-align: center;">
					<th text-align: center;>Full Name</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Contact</th>
					<th>Birthday</th>
					<th>Gender</th>
					<th>Status</th>
					<th>Photo</th>
					<th colspan=2>Action</th>
				</tr>
			</thead>
			<tbody>

				<?php

				$q = "SELECT * FROM members";

				$result = $connection->query($q);

				if ($result->num_rows) {

					while ($row = $result->fetch_assoc()) { ?>

						<tr>
							<td><?= $row['fullname']; ?></td>
							<td><?= $row['firstname']; ?></td>
							<td><?= $row['lastname']; ?></td>
							<td><?= $row['email']; ?></td>
							<td><?= $row['contact']; ?></td>
							<td><?= $row['birthday']; ?></td>
							<td><?= $row['gender']; ?></td>
							<td><?= $row['status']; ?></td>
							<td><img src="image/<?= $row['photo']?>" height="50px" width="50px"></td>
							<td style="text-align: center;"><a href="editform.php?id=<?=$row['id']?>" class="btn btn-warning mr-2">Edit</a><a href="delete.php?id=<?=$row['id']?>" class="btn btn-danger">Delete</a></td>
						</tr>

				<?php
					}
				}

				?>

			</tbody>
		</table>
</div>

</body>
</html>
