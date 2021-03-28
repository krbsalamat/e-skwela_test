<?php
include ('../config.php');
include ('../db_connection.php');

if(isset($_POST['user_name']) && $_POST['user_name'] != ''){
    $response = array();
    $username = mysqli_real_escape_string($dbCon, $_POST['user_name']);
    $table = array("students", "teachers");
    $tors = array("s_username", "t_username");
    $y = 0;
    $verify=0;
    for($x = 0; $x <= 1; $x++){
        $sql = "SELECT * FROM " . $table[$x] . " WHERE " . $tors[$x] . " ='" .$username. "'";
        $res = mysqli_query($dbCon, $sql);
        $count = mysqli_num_rows($res);
        $y = $x;
        if($count >= 1){
            $x = 1;
            $verify=1;
        }
    }
    if($count>0){
        $response['status'] = false;
        $response['msg'] = 'Username already exists';
    }elseif(strlen($username)<6 || strlen($username) > 15){
        $response['status'] = false;
        $response['msg'] = 'Username must be 6 to 15 characters';
    }elseif(!preg_match("/^[a-zA-Z1-9]+$/", $username)){
        $response['status'] = false;
        $response['msg'] = 'Use alphanumberic characters only';
    }else{
        $response['status'] = true;
        $response['msg'] = 'Username is available';
    }
    echo json_encode($response);
}
?>