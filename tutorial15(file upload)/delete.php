<?php
    
    include("include/header.php");
    include('db.php');

    $message = "";
    $color = "";

    $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : "";

    $qry = "DELETE FROM members WHERE id = '$id'";

    $r = $connection->query($qry);

    if($r){
        $message = "Data deleted successfully..!";
        $color = 1;
    }
    else{
        $message = "Something went wrong..!";
        $color = 0;
    }

    $_SESSION['deleteresult'] = $message;
    $_SESSION['deletecolor'] = $color;
    header("Location:index.php");

?>