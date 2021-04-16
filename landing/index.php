<?php
include "../partials/header.php";
error_reporting(E_ALL &~ E_NOTICE);
session_start();


$url1 = substr($_SERVER['REQUEST_URI'], strpos($_SERVER['REQUEST_URI'], 'landing/') );
$in_landing_home = false;
if ($url1 === 'landing/' || $url1 === 'landing' || $url1 === 'landing/index.php') $in_landing_home = true;
if(!isset($_SESSION['u_id'])){
  header(($in_landing_home == true) ? 'Location: ../login/?login=3' : 'Location: ../../login/?login=3');
}

include(($in_landing_home == true) ? '../config.php' : '../../config.php');
include(($in_landing_home == true) ? '../db_connection.php' : '../../db_connection.php');
$logOutDir = ($in_landing_home == true)? '../includes/logout.php' : '../../includes/logout.php'; 

$table = array("students", "teachers");
$torsu = array("s_username", "t_username");
$torsp = array("s_password", "t_password");
$torsx = array("s_", "t_");
$torsv = array("","s_", "t_");
$y = 0;
$verify=0;
for($x = 0; $x <= 1; $x++){
	$sql = "SELECT * FROM " . $table[$x] . " WHERE " . $torsx[$x].'id' . " ='" .$_SESSION['u_id']. "'";
	
	$res = mysqli_query($dbCon, $sql);
	$count = mysqli_num_rows($res);
	$y = $x;
	if($count >= 1){
		$x = 1;
		$verify=1;
	}
}
if ($row = mysqli_fetch_assoc($res)){
}else{
	header('Location: ../index.php');
}
//2=student 1=teacher
if($_SESSION['u_typen']==1){
	$utype = 1;
}else if($_SESSION['u_typen']==2){
	$utype = 2;
}
?> 


<div class="container-fluid h-100" id="landingHeader">
	<div class="row">
		<div class="col-lg-3 col-sm-12 my-4" id="picture">
			<img src="<?php echo $eskwela_home; ?>/images/profilepic1.jpg" alt="" id="profilePic">
		</div>
		<div class="col-lg-6 col-sm-12 my-4" style="border:1px outset red">
			<div class="row">
				<div class="col-lg-12" style="border:1px outset blue">
					<h2>Hello, <?php echo $row[$torsv[$utype].'firstname'];echo " "; echo $row[$torsv[$utype].'lastname'];?></h2>
				</div>
				<div class="col-lg-12" style="border:1px outset violet">
					<div class="row">
						<div class="col-lg-2" style="border:1px outset green">
							Level
						</div>
						<div class="col-lg-2" style="border:1px outset green">
							Rank
						</div>
						<div class="col-lg-2" style="border:1px outset green">
							Badge
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-sm-12 mt-5">
			<a class="btn btn-outline-dark ms-5" href="#!" role="button">
				<i class="fa fa-bell"></i>
			</a>
			<a class="btn btn-outline-dark ms-3" href="#!" role="button">
				<i class="fa fa-cogs"></i>
			</a>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-3">
			<div class="wrapper">
				<div class="sidenav nav nav-tabs">
					<ul class="">
						<h3>Dashboard</h3>
						<li><a class="nav-link" href="#landingHomeDiv" id="landingHomeButton">Home</a></li>
						<li><a class="nav-link" href="#landingCoursesDiv" id="landingCoursesButton">Courses</a></li>
						<li><a class="nav-link" href="#landingProgressDiv" id="landingProgressButton">Progress</a></li>
						<li><a class="nav-link" href="#landingBookingsDiv" id="landingBookingsButton">Bookings</a></li>
						<h3>Account</h3>
						<li><a class="nav-link" href="#landingProfileDiv" id="landingProfileButton">Profile</a></li>
						<li><a class="nav-link" href="#landingUploadDiv" id="landingUploadButton">Upload Video</a></li>
						<h3>Payment</h3>
						<li><a class="nav-link" href="#landingPayoutDiv" id="landingPayoutButton">Payout</a></li>
						<li><a class="nav-link" href="#landingHistoryDiv" id="landingHistoryButton">History</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-6" style="border:1px outset violet;">
			<div class="tab-content">
			<!-- add landing-*.php on whatever tab you're editing-->
			<?php include "landing-home.php"; include "landing-edit.php"; include "landing-bookings.php"; include "landing-history.php"; include "landing-payout.php"; include "landing-progress.php"; include "landing-upload.php";include "landing-courses.php";?>
			</div>
		</div>
		<div class="col-3" style="border:1px outset blue;">
			
		</div>
		
	</div>
	
</div>



<?php include "../partials/footer.php"; ?>