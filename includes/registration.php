<?php

session_start();
error_reporting(E_ALL); 
ini_set('display_errors', 'on');
if(isset($_POST['submit'])){
	include ('../config.php');
	include ('../db_connection.php');
    $fName = mysqli_real_escape_string($dbCon, $_POST['firstName']);
    $lName = mysqli_real_escape_string($dbCon, $_POST['lastName']);
	$dobD = mysqli_real_escape_string($dbCon, $_POST['dobDay']);
    $dobY = mysqli_real_escape_string($dbCon, $_POST['dobYear']);
    $dobM = mysqli_real_escape_string($dbCon, $_POST['dobMonth']);
    $stuEmail = mysqli_real_escape_string($dbCon, $_POST['stuEmail']);
    $region = mysqli_real_escape_string($dbCon, $_POST['region']);
    $teaEmail = mysqli_real_escape_string($dbCon, $_POST['teaEmail']);
    $username = mysqli_real_escape_string($dbCon, $_POST['usernameRegis']);
	$pwd = mysqli_real_escape_string($dbCon, $_POST['pwd']);
    $pwd2 = mysqli_real_escape_string($dbCon, $_POST['pwd2']);
    $usertypet = mysqli_real_escape_string($dbCon, $_POST['usertypet']);
    $usertypes = mysqli_real_escape_string($dbCon, $_POST['usertypes']);
    $usertype=0;
    
    if(empty($username)){
        header("Location: ../registration/?reg=1");
    }else{
        $pwdHash = password_hash($pwd, PASSWORD_BCRYPT);
        $uid = hexdec(uniqid());
        echo $uid;

        if(empty($stuEmail)){
            $sql = "INSERT INTO teachers (t_id, t_firstname, t_lastname, t_dobd, t_dobm, t_doby, t_region, t_email, t_password, t_username) VALUES ('$uid', '$fName', '$lName', '$dobD', '$dobM', '$dobY', '$region', '$teaEmail', '$pwdHash', '$username')";
            $usertype = 1;
            
        }else if (empty($teaEmail)){
            $sql = "INSERT INTO students (s_id, s_firstname, s_lastname, s_dobd, s_dobm, s_doby, s_region, s_email, s_password, s_username) VALUES ('$uid', '$fName', '$lName', '$dobD', '$dobM', '$dobY', '$region', '$stuEmail', '$pwdHash', '$username')";
            $usertype = 2;
        }
        
        echo mysqli_errno($dbCon);
        
        $insertValues = mysqli_query($dbCon, $sql);
        $table = array("", "teachers", "students");
        $tors = array("", "t_username", "s_username");
        $sql2 = "SELECT * FROM " . $table[$usertype] . " WHERE " . $tors[$usertype] . " ='" .$username. "'";
        $res2 = mysqli_query($dbCon,$sql2);
        
        if($row = mysqli_fetch_assoc($res2)){
            if(empty($stuEmail)){
                $_SESSION['u_id'] = $row['t_id'];
                $_SESSION['u_username'] = $row['t_username'];
                $_SESSION['u_fname'] = $row['t_firstname'];
                $_SESSION['u_lname'] = $row['t_lastname'];
                $_SESSION['u_type'] = "teacher";
                $_SESSION['u_typen'] = 2;
                header("Location: ../landing/");
            }else if(empty($teaEmail)){
                $_SESSION['u_id'] = $row['s_id'];
                $_SESSION['u_username'] = $row['s_username'];
                $_SESSION['u_fname'] = $row['s_firstname'];
                $_SESSION['u_lname'] = $row['s_lastname'];
                $_SESSION['u_type'] = "student";
                $_SESSION['u_typen'] = 1;
                header("Location: ../landing/");
            }
        }else{
        }
    }
} else {
	echo "button error";
	exit();
}
?>