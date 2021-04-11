<?php

session_start();
ob_start();
include ('../config.php');
include ('../db_connection.php');
 
$fname = mysqli_real_escape_string($dbCon, $_POST['a']);
$lname = mysqli_real_escape_string($dbCon, $_POST['b']);
$email = mysqli_real_escape_string($dbCon, $_POST['c']);
$username = mysqli_real_escape_string($dbCon, $_POST['d']);

echo $fname;
echo '</br>';
echo $lname;
echo '</br>';
echo $email;
echo '</br>';
echo $username;


?>