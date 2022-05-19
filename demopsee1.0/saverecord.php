<?php
require "connect.php";
session_start();
echo "<pre>";
print_r($_POST);
echo "</pre>";
$id = isset($_POST['id']) ? $_POST['id'] : "";
$gallery_name = isset($_POST['gallery_name']) ? $_POST['gallery_name'] : "";
$gallery_images = isset($_POST['gallery_images']) ? $_POST['gallery_images'] : "";
$isdelete = isset($_POST['isdelete']) ? $_POST['isdelete'] : "";
$updated_by = isset($_POST['updated_by']) ? $_POST['updated_by'] : ""; 
$updated_on= isset($_POST['updated_on']) ? $_POST['updated_on'] : "";
$created_by= isset($_POST['created_by']) ? $_POST['created_by'] : "";
$created_on= isset($_POST['created_on']) ? $_POST['created_on'] : "";
if ($id != "") {
    $sql = "update gd_gallery_sub set gallery_name='$gallery_name',gallery_images='$gallery_images',isdelete='$isdelete',updated_by='$updated_by',updated_on='$updated_on',created_by='$created_by',created_on='$created_on' where id=$id";
    echo $sql;
} else {
    $sql = "insert into gd_gallery_sub(gallery_name,gallery_images,isdelete,updated_by,updated_on,created_by,created_on)values('$gallery_name','$gallery_images','$isdelete','$updated_by','$updated_on','$created_by','$created_on')";
    echo $sql;
} 
if ($conn->query($sql))
    $_SESSION['msg'] = $id == "" ? "Record Added." : "Record Updated";
else
    $_SESSION['msg'] = "Opration Failed.";
header("Location:index.php");
