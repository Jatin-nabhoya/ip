<?php

    include("include/header.php");

    if(!isset($_SESSION['email'])){
        
        header('location:login.php');
        
    }
    
    unset($_SESSION['email']);

    $_SESSION['logoutmessage'] = "Logout Successfully!";

    header('location:index.php');

?>