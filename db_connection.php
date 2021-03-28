<?php
$dbCon = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_errno()){
	echo "Failed to connect" . mysqli_connect_error();
}