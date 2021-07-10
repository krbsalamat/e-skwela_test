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
    
    $allowed = array('jpg', 'jpeg');

    if($_SESSION['u_typen']==1){
        $utype = 1;
        $torsdb = "stuprofile";
        $torsid = "s_id";
        
    }else if($_SESSION['u_typen']==2){
        $utype = 2;
        $torsdb = "teaprofile";
        $torsid = "t_id";
        
    }
    
    if(in_array($fileActualExtension, $allowed)){
        if($fileError === 0){
            if($fileSize < 1200000){
                $fileNameNew = $uid . ".jpg";
                $fileLocation = '../uploads/pics/'.$fileNameNew;
                $quality = 50;
                $val = 0;
                move_uploaded_file($fileTmpName, $fileLocation);
                $removeDefaultsql = "UPDATE ".$torsdb." SET is_default = '$val' WHERE id = ".$uid."";
                $removeDefault = mysqli_query($dbCon, $removeDefaultsql);
                mysqli_error($dbCon);
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