<?php

  include('include/header.php');

  $pass = isset($_SESSION['password']) ? $_SESSION['password'] : "";
  unset($_SESSION['password']);

  $fileerror = isset($_SESSION['fileerror']) ? $_SESSION['fileerror'] : "";
  unset($_SESSION['fileerror']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="container register">
    <h1 class="heading">Register</h1>
    <form action="store.php" method="post" enctype="multipart/form-data">

    <h3 class="text-danger"><?=$pass?></h3>
    <h2 class="text-danger"><?=$fileerror?></h2>

      <div class="form-group">
        <label for="fullname">Full Name:</label>
        <input type="text" class="form-control" id="fullname" placeholder="Enter full name" name="fullname" required value="jatin nabhoya">
      </div>
      <div class="form-group">
        <label for="firstname">First Name:</label>
        <input type="text" class="form-control" id="firstname" placeholder="Enter first name" name="firstname" required value="jatin">
      </div>
      <div class="form-group">
        <label for="lastname">Last Name:</label>
        <input type="text" class="form-control" id="lastname" placeholder="Enter last name" name="lastname" required value="Nabhoya">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required value="jvNabhoya@gmail.com">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required value="123456">
      </div>
      <div class="form-group">
        <label for="cpwd">Confirm Password:</label>
        <input type="password" class="form-control" id="cpwd" placeholder="Confirm password" name="cpswd" required value="123456">
      </div>
      <div class="form-group">
        <label for="contact">Contact:</label>
        <input type="text" class="form-control" id="contact" placeholder="Enter contact number" name="contact" required value="9723859787">
      </div>
      <div class="form-group">
        <label for="gender">Gender : </label>
        <select name="gender" id="gender" class="form-control" required>
          <option value="">Select Gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Others">Others</option>
        </select>
      </div>
      <div class="form-group">
        <label for="bdate">Birth Date:</label>
        <input type="date" class="form-control" id="bdate" name="bdate" required>
      </div>
      <div class="form-group">
        <label for="photo">Photo:</label>
        <input type="file" class="form-control" id="photo" name="photo" required>
      </div>
      <input type="submit" class="btn btn-primary" value="Register" name="register">

      <p>Already have an account? <a href="login.php">Login</a></p>
    </form>
  </div>

</body>

</html>