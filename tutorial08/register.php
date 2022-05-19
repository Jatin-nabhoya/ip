<?php

    session_start();

    $message = isset($_SESSION['fileresult']) ? $_SESSION['fileresult'] : "";
    $color = isset($_SESSION['color']) ? $_SESSION['color'] : "";
    unset($_SESSION['fileresult']);
    unset($_SESSION['color']);

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
    <form action="fileupload.php" method="post" enctype="multipart/form-data">
      <h4 class="<?= ($color) ? "text-success" : "text-danger";?>"><?= $message;?></h4>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" placeholder="Enter username" name="email">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
      </div>
      <div class="form-group">
        <label for="pwd">Confirm Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Confirm password" name="pswd">
      </div>
      <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" class="form-control" id="age" placeholder="" value="18" min=10 max=50 name="age">
      </div>
      <div class="form-group">
        <label for="bdate">Birth Date:</label>
        <input type="date" class="form-control" id="bdate" placeholder="" name="bdate">
      </div>
      <div class="form-group">
        <label for="country">Country:</label>
        <input type="text" class="form-control" id="country" placeholder="Enter country" name="country">
      </div>
      <div class="form-group">
        <label for="state">State:</label>
        <input type="text" class="form-control" id="state" placeholder="Enter state" name="state">
      </div>
      <div class="form-group">
        <label for="city">City:</label>
        <input type="text" class="form-control" id="city" placeholder="Enter city" name="city">
      </div>
      <div class="form-group">
        <label for="profile">Profile:</label>
        <input type="file" class="form-control" id="profile" placeholder="" name="profile">
      </div>
      <input type="submit" value="Register" name="register" class="btn btn-primary">

      <p>Already have an account? <a href="login.html">Login</a></p>
    </form>
  </div>

</body>

</html>