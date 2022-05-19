<?php
require "connect.php";
session_start();

$gallery_name ="";
$gallery_images ="";
$id=isset($_REQUEST['id'])?$_REQUEST['id']:"";
echo $id;
if (isset($_REQUEST['id'])) {
    $sql = "select * from gd_gallery_sub where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $gallery_name = isset($row['gallery_name']) ? $row['gallery_name'] : "";
    $gallery_images = isset($row['gallery_images']) ? $row['gallery_images'] : "";
}


?>
<!DOCTYPE html>

<head>
    <title>add record</title>
    <!--<link rel="stylesheet" type="text/css" href="bootstrap.css">-->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="signupbox">

        <br>
        <h1>add record</h1>
        <form action="saverecord.php" method="POST">
            <input type="hidden" id='id' name='id' value=<?=$id?>>
            <label> gallery_name : </label>&nbsp;<input type="text" name="gallery_name" id="gallery_name" placeholder="gallery_name" autocomplete="off" value="<?=$gallery_name?>"><br>
            <label> gallery_images : </label>&nbsp;<input type="file" class="form-control" value="<?php echo $row['gallery_images'];?>" id="gallery_images" placeholder="gallery_images" name="gallery_images">
            <div class="sub"><input type="submit" value="Add" name="submit" id="submit"></div>
        </form>
    </div>
</body>

</html>