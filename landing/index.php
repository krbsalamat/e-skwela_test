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
$torsv = array("","s_", "t_");
$y = 0;
$verify=0;
for($x = 0; $x <= 1; $x++){
	$sql = "SELECT * FROM " . $table[$x] . " WHERE " . $torsu[$x] . " ='" .$_SESSION['u_username']. "'";
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
					<ul>
						<h3>Dashboard</h3>
						<li><a class="nav-link" href="#landingHomeDiv" id="landingHomeButton">Home</a></li>
						<li><a class="nav-link" href="#">Courses</a></li>
						<li><a class="nav-link" href="#">Progress</a></li>
						<li><a class="nav-link" href="#">Bookings</a></li>
						<h3>Account</h3>
						<li><a class="nav-link" href="#landingProfileDiv" id="landingProfileButton">Profile</a></li>
						<li><a class="nav-link" href="#">Upload Video</a></li>
						<h3>Payment</h3>
						<li><a class="nav-link" href="#">Payout</a></li>
						<li><a class="nav-link" href="#">History</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-6" style="border:1px outset violet;">
			<div class="tab-content">
				<!-- MIDDLE CONTENT -->
				<div class="tab-pane active" id="landingProfileDiv">
					<form>
					<h3>Edit profile</h3>
					<div class="row">
						
						<div class="col-6">
							<label for="landingProfileFname" class="form-label">First Name</label>
							<input type="text" class="form-control" name="landingProfileFname" id="landingProfileFname" placeholder="<?php echo $row[$torsv[$utype].'firstname']; ?>">
						</div>
						<div class="col-6">
							<label for="landingProfileLname" class="form-label">Last Name</label>
							<input type="text" class="form-control" name="landingProfileLname" id="landingProfileLname" placeholder="<?php echo $row[$torsv[$utype].'lastname']; ?>">
						</div>
					</div>
					<div class="row mt-2 pt-2">
						<div class="col-6">
							
							<label for="landingUsername" class="form-label">Username</label> 
							
							<input type="text" class="form-control" id="landingUsername" name="landingUsername" placeholder="<?php echo $row[$torsv[$utype].'username']; ?>">
						</div>
						<div class="col-6">
							<label for="landingEmail" class="form-label">Email</label>
							<input type="email" class="form-control" name="landingEmail" id="landingEmail" placeholder="<?php echo $row[$torsv[$utype].'email']; ?>">
						</div>
					</div>
					<div class="col-6" id="landingUsercheckdiv">
						<span id="landingUsercheck" class="help-block"></span>
					</div>
					<button type="button" class="btn btn-primary mt-5" name="landingSubmit" id="landingSubmit">Change details</button>
					<span id="submission" class="help-block text-success"></span>
				</div>
				
				</form>
				<div class="tab-pane" id="landingHomeDiv">
					<h5>Home div</h5>
				</div>
				<div class="tab-pane" id="">
					<h5>asdasdasd</h5>
				</div>
			</div>
		</div>
		<div class="col-3" style="border:1px outset blue;">
			
		</div>
		
	</div>
	
</div>



<?php include "../partials/footer.php"; ?>