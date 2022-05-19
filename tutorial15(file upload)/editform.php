<?php

include('include/header.php');
include('db.php');

$id = isset($_GET['id']) ? $_GET['id'] : "";

$q = "SELECT * FROM members";

$result = $connection->query($q);

$row = $result->fetch_assoc();

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
        <h1 class="heading">Edit</h1>
        <form action="edit.php" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <input type="hidden" class="form-control" id="id" placeholder="Enter full name" name="id" value="<?= $row['id']; ?>">
            </div>
            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" class="form-control" id="fullname" placeholder="Enter full name" name="fullname" required value="<?= $row['fullname']; ?>">
            </div>
            <div class="form-group">
                <label for="firstname">First Name:</label>
                <input type="text" class="form-control" id="firstname" placeholder="Enter first name" name="firstname" required value="<?= $row['firstname']; ?>">
            </div>
            <div class="form-group">
                <label for="lastname">Last Name:</label>
                <input type="text" class="form-control" id="lastname" placeholder="Enter last name" name="lastname" required value="<?= $row['lastname']; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required value="<?= $row['email']; ?>">
            </div>
            <div class="form-group">
                <label for="contact">Contact:</label>
                <input type="text" class="form-control" id="contact" placeholder="Enter contact number" name="contact" required value="<?= $row['contact']; ?>">
            </div>
            <input type="submit" class="btn btn-primary" value="Edit" name="edit">
        </form>
    </div>

</body>

</html>