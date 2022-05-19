<?php

include('include/header.php');
include('db.php');

$message = "";
$color = "";

if (isset($_POST['edit'])) {

    $id = $_POST['id'];
    $fullname = trim($_POST['fullname']);
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $contact = trim($_POST['contact']);

    $qry = "UPDATE members SET fullname = '$fullname', firstname = '$firstname', lastname = '$lastname', email = '$email', contact = '$contact' WHERE id = '$id'";

    $result = $connection->query($qry);

    if($result){
        $_SESSION['updateresult'] = "Updated successfully..!";
        $_SESSION['ucolor'] = 1;
    }
    else{
        $_SESSION['updateresult'] = "Something went wrong..!";
        $_SESSION['ucolor'] = 0;
    }
    
    header('location: index.php');
}

?>