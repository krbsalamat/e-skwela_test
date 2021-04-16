<?php
error_reporting(E_ALL &~ E_NOTICE);
session_start();
ob_start();

$directoryURI = $_SERVER['REQUEST_URI'];
if ( strpos( $directoryURI, '/registration/' ) !== false ) $activeMenu = 'registration';
else if ( strpos( $directoryURI, '/login/' ) !== false ) $activeMenu = 'login';
else if ( strpos( $directoryURI, '/about/' ) !== false ) $activeMenu = 'main';
else if ( strpos( $directoryURI, '/explore/' ) !== false ) $activeMenu = 'main';
else if ( strpos( $directoryURI, '/landing/' ) !== false ) $activeMenu = 'landing';
else if ( strpos( $directoryURI, '/main/' ) !== false ) $activeMenu = 'main';
else $activeMenu = 'home';

include(($activeMenu == 'home') ? 'config.php' : '../config.php');
include(($activeMenu == 'home') ? 'db_connection.php' : '../db_connection.php');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible"
        content="ie=edge"/>
        <Title>E-Skwela</Title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo $eskwela_home; ?>/custom.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>        
        <link href="https://cdn.jsdelivr.net/npm/smartwizard@5/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript">
            $(document).ready(function(){
                $("#submit").click(function(){
                    var username = $("#username").val().trim();
                    var password = $("#password").val().trim();

                    if( username != "" && password != "" ){
                        $.ajax({
                            url:'<?php echo $eskwela_home; ?>/includes/login.php',
                            type:'post',
                            data:{username:username,password:password},
                            success:function(response){
                                var msg = "";
                                if(response == 1){
                                    window.location = "<?php echo $eskwela_home; ?>/landing/index.php";
                                }else if(response==2){
                                    msg = "no user exists";
                                }
                                else if(response==3){
                                    msg = "query error";
                                }
                                else if(response==4){
                                    msg = "Invalid password!";
                                }
                                else if(response==5){
                                    msg = "db error";
                                }
                                $("#errMsgTxt").html(msg);
                            }
                        });
                    }
                });
            });
            //form submit for profile edit page
            $(document).ready(function(){
                $("#landingSubmit").click(function(e){
                    e.preventDefault();
                    var lpfname = $("#landingProfileFname").val().trim();
                    var lplname = $("#landingProfileLname").val().trim();
                    var lpusername = $("#landingUsername").val().trim();
                    var lpemail = $("#landingEmail").val().trim();

                    
                    if(!$("#landingUsercheckdiv").hasClass('has-success')){
                        console.log("chk username");
                    }else if(!validatelandingEmail($("#landingEmail").val())){
                        $("#submission").html("Check email address!");
                        $("#submission").addClass("text-danger").removeClass("text-success");
                        console.log("failemail");
                        return false;
                    }else{ 
                        $.ajax({
                            url:'<?php echo $eskwela_home; ?>/includes/update.php',
                            type:'post',
                            data:{a:lpfname,b:lplname,c:lpemail,d:lpusername},
                            success:function(response){
                                var msg = "success";
                                $("#submission").html(msg);
                                $("#submission").addClass("text-success").removeClass("text-danger");
                                console.log(response);
                                location.reload();
                            }
                        });
                    }
                    function validatelandingEmail($landingEmail){
                    var emailReg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                    return emailReg.test($landingEmail);
                    }
                });
            });
        </script>
    </head>
    <body class="site">
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" id="header">
            <div class="container-fluid">
                <a href="<?php echo $eskwela_home; ?>/index.php">
                <img src="<?php echo $eskwela_home; ?>/images/logo.png" width="200" height="60" href="#"> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex ms-5">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo $eskwela_home; ?>/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo $eskwela_home; ?>/about/index.php">About</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo $eskwela_home; ?>/explore/index.php">Explore</a>
                    </li>
                    <?php if(isset($_SESSION['u_id'])) { ?>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo $eskwela_home; ?>/landing/index.php"><li>Portal</li></a>
                        
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo $eskwela_home; ?>/includes/logout.php"><li class="log">
                            <?php echo $_SESSION['u_type']; ?>
                        <?php echo $_SESSION['u_fname']; ?> Logout</li></a>
                        <?php }else{ ?>
                    <li class="nav-item">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal"> Log in or Sign Up </button>
                    </li><?php } ?></ul>
                </div>
            </div>
        </nav>
            
            <div class="modal fade" id="loginModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Log in</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" width="600px" height="500px">
                    <form action="<?php echo $eskwela_home; ?>/includes/login.php" method="POST">
                        <div class="mb-3" id="errMsgTxt">
                        </div>
                        <div class="mb-3">
                            <label for="exampleUser" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" id="username" aria-describedby="userHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <div class="mb-3">
                            Not a member? <a href="<?php echo $eskwela_home; ?>/registration/index.php"> Sign in </a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" id="submit" name="submit" class="btn btn-primary">Log in</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content">

        <script>
            var input = document.getElementById("password");
            input.addEventListener("keyup", function(event) {
                if (event.keyCode === 13) {
                    event.preventDefault();
                    document.getElementById("submit").click();
                }
            });
        </script>
        <script>
            var input = document.getElementById("username");
            input.addEventListener("keyup", function(event) {
                if (event.keyCode === 13) {
                    event.preventDefault();
                    document.getElementById("submit").click();
                }
            });
        </script>


        