<?php
error_reporting(E_ALL &~ E_NOTICE);
session_start();
if(isset($_SESSION['id'])){
  $userId = $_SESSION['id'];
  $username = $_SESSION['logb0'];
}
else {
  header('Location: index.php');
  die();
}
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "e-bio ordering";


if($_POST['submit']){

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$text = $_POST['text'];


$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);


$sql = "INSERT INTO inquiry (name, email, subject, text) VALUES ('$name', '$email', '$subject', '$text')";

if ($conn->query($sql) === TRUE){
  echo "Thank you! ok na info mo";
  header('Location: index.php');
}
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

?>



<!DOCTYPE html>
<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html><!--<![endif]-->
<head>
<title>E-Bio Green Trading | Contact</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/foundation.min.css">
<link rel="stylesheet" href="css/superfish.css">
<link rel="stylesheet" href="css/stylesheet.css">
<link href='http://fonts.googleapis.com/css?family=Quando' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,300' rel='stylesheet' type='text/css'>
<script src="js/vendor/custom.modernizr.js"></script>
<script>
Modernizr.load({
    // test if browser understands media queries
    test: Modernizr.mq('only all'),
    // if not load ie8-grid
    nope: 'css/ie8-grid-foundation-4.css'
});
</script>
<!--[if lt IE 9]>
<link rel="stylesheet" href="css/ie-fixes.css">
<![endif]-->
</head>
<body>
<div class="header">
  <div class="row">
    <div class="columns large-12">
      <div class="row header-inner">
        <div class="columns large-3 small-12"> <a href="index.html"><img src="images/LOGO3.png" alt="" class="logo"></a> </div>
        <div class="columns large-8">
          <nav>
            <section>
              <ul class="sf-menu large-12">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="about.html">About us</a></li>
                <li class="has-dropdown"><a href="products.html">Products</a></li>
                <li><a href="cart.html">Cart</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="login.html">Login</a></li>
              </ul>
            </section>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="columns large-12 small-top-menu">
      <div class="row">
        <div class="columns large-12 plr0 top-nav">
          <form name="dropdown" class="dropdown" action="#">
            <nav>
              <section>
                <select name="selected" id="target" accesskey="E" onChange="goToNewPage(document.dropdown.selected)">
                  <option value="index.html">Home</option>
                  <option value="about.html">About Us</option>
                  <option value="products.html">Products</option>
                  <option value="cart.html">Cart</option>
                  <option value="contact.html">Contact Us</option>
                  <option value="login.html">Login</option>
                </select>
              </section>
            </nav>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row content-wrapper">
  <div class="columns large-12">
    <div class="row wrapper">
      <div class="columns large-12 content ">
        <h1 class="page-title">Contact Us</h1>
        <div>
          <h2 class="sub-title">We would like to hear about your comment or suggestion.</h2>
        </div>
        <div class="row contact-form">
          <div class="columns large-8">
            <form id="contact-form" method="post" action="#">
              <input type="text" name="name" placeholder="Name:">
              <input type="text" name="email" placeholder="Email:">
              <input type="text" name="subject" placeholder="Subject:">
              <textarea  name="message"></textarea>
              <input type="submit" class="button" name="submit" value="send">
            </form>
          </div>
          <div class="columns large-4">
            <div id="map_canvas"></div>
            <ul class="vcard">
              <li class="fn">E-Bio Green Trading</li>
              <li class="street-address">712 Mariwasa St. United San Pedro Sudbidivision, San Pedro Laguna
</li>
              <li class="email"><span>Email: </span>eduardobio04@gmail.com</li>
              <li class="telephone"><span>Tel: </span>7154770 or 7144368</li>
              </ul>
          </div>
        </div>
      </div>
      <div class="row collapse">
        <div class="columns large-12"> </div>
      </div>
    </div>
  </div>
</div>
<footer class="footer">
  <div class="row">
    <div class="columns large-12 footer-inner">
      <div class="row">
        <div class="columns large-4 useful-links">
          <div>
            <h2 class="footer-title">Quick links</h2>
            <ul class="footer-list">
              <li><a href="#">Home</a></li>
              <li><a href="about.html">About Us</a></li>
              <li><a href="products.html">Products</a></li>
              <li><a href="cart.html">Cart</a></li>
              <li><a href="contact.html">Contact Us</a></li>
              <li><a href="login.html">Login</a></li>
            </ul>
          </div>
        </div>
        <div class="columns large-4 contact">
          <div>
            <h2 class="footer-title">Contactus</h2>
            <ul class="footer-list">
              <li><span class="small-icon"><img src="images/address.png" alt=""></span>712 Mariwasa St. United San Pedro Sudbidivision, San Pedro Laguna</li>
              <li><span class="small-icon"><img src="images/phone.png" alt=""></span>Tel: 7154770 or 7144368</li>
              <li><span class="small-icon"><img src="images/email.png" alt=""></span>eduardobio04@gmail.com</li>
              <li><span class="social-media"><a href="#">t</a></span><span class="social-media"><a href="#">f</a></span><span class="social-media"><a href="#">y</a></span><span class="social-media"><a href="#">g</a></span></li>
            </ul>
          </div>
        </div>
        <div class="columns large-4 about">
          <div>
            <h2 class="footer-title">Aboutus</h2>
            <p><img src="images/about.jpg" alt=""></p>
            <p>E-Bio Green Trading is a trading and districution company known for its potent insecticides, herbicides, fungicides, and other agricultural chemicals.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<div class="credit-row">
  <div class="row">
    <div class="columns large-11 credit"> &copy; 2017 All rights reserved by <a href="#">E-Bio Green Trading</a>
    <div class="columns large-1"> <img src="images/toparrow.png" alt="" class="scrollToTop"> </div>
  </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/google-maps.js"></script>
<script>
Modernizr.load({
    test: Modernizr.placeholder,
    nope: 'js/placeholder.min.js'
});
function goToNewPage() {
    if (document.getElementById('target').value) {
        window.location.href = document.getElementById('target').value;
    }
}
</script>
<script>
$(document).ready(function () {
    $('ul.sf-menu').superfish({
        animation: {
            height: 'show'
        },
        delay: 400
    });
    $("img.scrollToTop").click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
    });
});
</script>
</body>
</html>