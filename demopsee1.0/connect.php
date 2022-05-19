<?php
$servername = "localhost:3360";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,"gd_gallery");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>