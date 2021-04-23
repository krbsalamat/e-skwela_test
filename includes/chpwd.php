<?php
session_start();
ob_start();
include ('../config.php');
include ('../db_connection.php');


$pwd = mysqli_real_escape_string($dbCon, $_POST['password']);
$pwd2 = mysqli_real_escape_string($dbCon, $_POST['password2']);
$usertype = $_SESSION['u_typen'];

$table = array("","students", "teachers");
$torsu = array("","s_username", "t_username");
$torsp = array("","s_password", "t_password");
$torsv = array("","s_", "t_");

if($pwd == $pwd2){
    $pwdHashed = password_hash($pwd, PASSWORD_BCRYPT);
    $sql = "UPDATE " .$table[$usertype]. " SET ".$torsv[$usertype]."password = '$pwdHashed' WHERE ".$torsv[$usertype]."id = ".$_SESSION['u_id']."";
    $res = mysqli_query($dbCon, $sql);
    echo "3";
}else{
    echo "1";
}
?>