<?php

include("include/header.php");
include('db.php');

$email = (isset($_POST['email']) ? trim($_POST['email']) : '');
$pswd = (isset($_POST['pswd']) ? trim($_POST['pswd']) : '');

echo $email." ".$pswd;

$q = "SELECT * FROM user where username = '$email' and password = '$pswd' LIMIT 1";

$result = $connection->query($q);
print_r($result);
if ($result->num_rows) {

    $_SESSION['email'] = $email;
    
    header('location:index.php');
} else {
    echo '<script>alert("Email and Password Combination doesn\'t match!");</script>';

    echo '<script type="text/javascript">';
    echo 'window.location.href="index.php";';
    echo '</script>';
}

?>
