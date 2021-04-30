<?php
session_start();
ob_start();
include ('../config.php');
include ('../db_connection.php');
    $table = array("","students", "teachers");
    $torsu = array("","s_username", "t_username");
    $torsp = array("","s_password", "t_password");
    $torsv = array("","s_", "t_");
    $uid = $_SESSION['u_id'];
    $file = $_FILES['profilepicfile'];
    $fileName = $_FILES['profilepicfile']['name'];
    $fileTmpName = $_FILES['profilepicfile']['tmp_name'];
    $fileSize = $_FILES['profilepicfile']['size'];
    $fileError = $_FILES['profilepicfile']['error'];
    $fileType = $_FILES['profilepicfile']['type'];
    

    $fileExt = explode('.', $fileName);
    $fileActualExtension = strtolower(end($fileExt));
    
    $allowed = array('jpg', 'jpeg', 'png', 'gif');

    if(in_array($fileActualExtension, $allowed)){
        if($fileError === 0){
            if($fileSize < 500000){
                $fileNameNew = $uid . "." . $fileActualExtension;
                $fileLocation = '../uploads/pics/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileLocation);
                echo "success";
            }else{
                echo "big";
            }
        }else{
            echo "files error";
        }

    }else{
        echo "incorrect file";
    }



?>