<?php

    session_start();

    $message = "";
    $color = 0;

    if(isset($_POST['register'])){

        if(($_FILES['profile']['error'] == UPLOAD_ERR_OK)){
            echo "Hello";
            $filetmppath = $_FILES['profile']['tmp_name'];
            $fname = $_FILES['profile']['name'];
            $filetype = $_FILES['profile']['type'];

            $fnamecmps = explode('.', $fname);

            $fileextension = strtolower(end($fnamecmps));
            echo $fileextension;

            $newfilename = md5(time().$fname).'.'.$fileextension;
            echo $newfilename;

            $extensionlist = array('jpg', 'jpeg', 'png', 'svg');

            if(in_array($fileextension, $extensionlist)){

                $uploaddir = "image/";
                $dpath = $uploaddir.$newfilename;

                if(move_uploaded_file($filetmppath, $dpath)){
                    $message = "File uploaded successfully..!";
                    $color = 1;
                }
                else{
                    $message = "File upload error..!";
                }

            }
            else{
                $message = "Invalid file extension..!<br>Valid file extension is ".$extensionlist;
            }
        }

        $_SESSION['fileresult'] = $message;
        $_SESSION['color'] = $color;

        header('location: register.php');
    }

?>