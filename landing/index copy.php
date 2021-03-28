<?php
include "../partials/header.php";
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
?> 
  <<div class="filler">
      <?php
        echo "Welcome, ";
        echo $_SESSION['u_type'];
        echo " ";
        echo $_SESSION['u_fname'];
        echo " ";
        echo $_SESSION['u_lname'];
        echo "<br>";
        echo "<br>";
        echo "Your ID is ";
        echo $_SESSION['u_id'];
      ?>
      <br/>
      <a href="../includes/logout.php"> Log out </a>
      <br/>
      <a href="<?php echo $eskwela_home; ?>"> Home </a>
  </div>
</div>

<?php include "../partials/footer.php"; ?>