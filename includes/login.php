<?php

session_start();
include ('../config.php');
include ('../db_connection.php');
	$username = mysqli_real_escape_string($dbCon, $_POST['username']);
	$pwd = mysqli_real_escape_string($dbCon, $_POST['password']);
    if(empty($pwd) || (empty($username))){
        echo 0;
    }else{
        $table = array("students", "teachers");
        $torsu = array("s_username", "t_username");
        $torsp = array("s_password", "t_password");
        $y = 0;
        $verify=0;
        for($x = 0; $x <= 1; $x++){
            $sql = "SELECT * FROM " . $table[$x] . " WHERE " . $torsu[$x] . " ='" .$username. "'";
            $res = mysqli_query($dbCon, $sql);
            $count = mysqli_num_rows($res);
            $y = $x;
            if($count >= 1){
                $x = 1;
                $verify=1;
            }
        }
        if($count<1){
            echo 2;
        }elseif($res == FALSE){
            echo 3;
        }else{
            if ($row = mysqli_fetch_assoc($res)){
                $pwdCheck = password_verify($pwd, $row[$torsp[$y]]);
                if($pwdCheck == false){
                    echo 4;
                }elseif ($pwdCheck == true){
                    echo 1;
                    if($y==1){
                        $_SESSION['u_id'] = $row['t_id'];
                        $_SESSION['u_username'] = $row['t_username'];
                        $_SESSION['u_fname'] = $row['t_firstname'];
                        $_SESSION['u_lname'] = $row['t_lastname'];
                        $_SESSION['u_type'] = "Teacher";
                        $_SESSION['u_typen'] = 2;
                       
                    }else if($y==0){
                        $_SESSION['u_id'] = $row['s_id'];
                        $_SESSION['u_username'] = $row['s_username'];
                        $_SESSION['u_fname'] = $row['s_firstname'];
                        $_SESSION['u_lname'] = $row['s_lastname'];
                        $_SESSION['u_type'] = "Student";
                        $_SESSION['u_typen'] = 1;
                    }
                }
            }else{
                echo 5;
            }
        }
    }
?>
