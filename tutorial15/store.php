<?php

include('include/header.php');
include('db.php');

if (isset($_POST['register'])) {

    $fullname = trim($_POST['fullname']);
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $pswd = trim($_POST['pswd']);
    $cpswd = trim($_POST['cpswd']);
    $contact = trim($_POST['contact']);
    $gender = $_POST['gender'];
    $bdate = $_POST['bdate'];

    if ($pswd != $cpswd) {
        $_SESSION['password'] = "Passwords doesn't matched";
        header("Location:registration.php");
    }

    if (($_FILES['photo']['error'] == UPLOAD_ERR_OK)) {

        $filetmppath = $_FILES['photo']['tmp_name'];
        $fname = $_FILES['photo']['name'];
        $filetype = $_FILES['photo']['type'];

        $fnamecmps = explode('.', $fname);

        $fileextension = strtolower(end($fnamecmps));

        $newfilename = md5(time() . $fname) . '.' . $fileextension;

        $extensionlist = array('jpg', 'jpeg', 'png', 'svg');

        if (in_array($fileextension, $extensionlist)) {

            $uploaddir = "image/";
            $dpath = $uploaddir . $newfilename;

            if (move_uploaded_file($filetmppath, $dpath)) {

                $q = "INSERT INTO `members` (`id`, `fullname`, `firstname`, `lastname`, `email`, `password`, `contact`, `birthday`, `gender`, `passno`, `registerby`, `status`, `photo`, `timestemp`) VALUES  (NULL, '$fullname','$firstname', '$lastname','$email','$pswd','$contact','$bdate','$gender','1','regular','y','$newfilename',current_timestamp())";

                $result = $connection->query($q);

                if ($result) {
                    $message = "Data inserted successfully..!";
                    $color = 1;
                } else {
                    $message = "Something went wrong, please try again..!";
                    $color = 0;
                }

                $_SESSION['insertresult'] = $message;
                $_SESSION['color'] = $color;
                header("Location:index.php");
            } else {
                $message = "File upload error..!";
                $_SESSION['fileerror'] = $message;
                header("Location: registration.php");
            }
        } else {
            $message = "Invalid file extension..! Valid file extension is jpg, jpeg, png and svg";
            $_SESSION['fileerror'] = $message;
            header("Location: registration.php");
        }
    }
}
