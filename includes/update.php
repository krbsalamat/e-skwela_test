<?php

session_start();
ob_start();
include ('../config.php');
include ('../db_connection.php');
 
$fname = mysqli_real_escape_string($dbCon, $_POST['a']);
$lname = mysqli_real_escape_string($dbCon, $_POST['b']);
$email = mysqli_real_escape_string($dbCon, $_POST['c']);
$username = mysqli_real_escape_string($dbCon, $_POST['d']);
$usertype = $_SESSION['u_typen'];

$table = array("","students", "teachers");
$torsu = array("","s_username", "t_username");
$torsp = array("","s_password", "t_password");
$torsv = array("","s_", "t_");

$sql = "UPDATE " .$table[$usertype]. " SET ".$torsv[$usertype]."firstname = '$fname',".$torsv[$usertype]."lastname = '$lname',".$torsv[$usertype]."username = '$username',".$torsv[$usertype]."email = '$email' WHERE ".$torsv[$usertype]."id = ".$_SESSION['u_id']."";
$res = mysqli_query($dbCon, $sql);

header("Refresh:0");

?>