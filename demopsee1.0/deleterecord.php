<?php
session_start();
require "connect.php";
$id=isset($_REQUEST['id'])?$_REQUEST['id']:"";
$sql="delete from gd_gallery_sub where id=$id";
$conn->query($sql);
?>