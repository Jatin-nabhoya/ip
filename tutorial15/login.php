<?php

  include("include/header.php");

  $message = isset($_SESSION['logoutmessage'])? $_SESSION['logoutmessage'] : "";

  unset($_SESSION['logoutmessage']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="container login">
    <h1 class="heading">Login</h1>
    <form action="validateuser.php" method="post">
      <div class="text-success">
        <h4><?=$message ?></h4>
      </div>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" placeholder="Enter username" name="email" required value="admin@gmail.com">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required value="123456">
      </div>
      <button type="submit" class="btn btn-primary" name="login">Login</button>

      <p>New to this site? <a href="registration.php">Register</a></p>
    </form>
  </div>

</body>

</html>