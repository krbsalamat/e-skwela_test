<?php include "../partials/header.php"?>
<div class="container">
<h1> register kana besz </h1>
<?php if(isset($_GET["reg"])){ ?>
      <div class = "alert alert-danger">
      <h4 style="text-align:center">
      <?php if($_GET["reg"]=== '1' ) echo 'ERROR: Empty fields!';
      else if ($_GET["reg"]=== '2' ) echo 'ERROR: Password Mismatch!';
      else if ($_GET["reg"]=== '3' ) echo 'ERROR: Username Taken';
      else if ($_GET["reg"]=== 'errorCode2' ) echo 'errormessage2'; ?>
      </h4>
      </div>
      <?php } ?>
<form action="<?php echo $eskwela_home; ?>/includes/registration.php" method="POST">
<div class="row my-3">
	<div class="row col-sm-12">
		<div class="col-sm-6">
				<label for="firstname" class="col-sm-2 col-form-label">First Name</label>
				<div class="col-sm-12">
					<input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
				</div>
		</div>
		<div class="col-sm-6">
			<label for="lastname" class="col-sm-2 col-form-label">Last Name</label>
			<div class="col-sm-12">
				<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
			</div>
		</div>
		<div class="col-sm-6">
			<label for="email" class="col-sm-2 col-form-label">Email</label>
			<div class="col-sm-12">
				<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
			</div>
		</div>
		<div class="col-sm-6">
			<label for="age" class="col-sm-2 col-form-label">Age</label>
			<div class="col-sm-12">
				<input type="number" class="form-control" id="age" name="age" placeholder="Age" required>
			</div>
		</div>
		<div class="col-sm-6">
			<label for="username" class="col-sm-2 col-form-label" >Username</label>
			<div class="input-group mb-3 col-sm-6">
				<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon-1">@</span>
				</div>
				<input type="text" name="username" id="username" name="username" class="form-control col-sm-6" aria-describedby="basic-addon-1">
			</div>
		</div>
		<div class="col-sm-6">
			
		</div>
		<div class="col-sm-6">
			<label for="pwd" class="col-sm-2 col-form-label">Password</label>
			<div class="col-sm-12">
				<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
			</div>
		</div>
		<div class="col-sm-6">
			<label for="pwd-repeat" class="col-sm-4 col-form-label">Confirm Password</label>
			<div class="col-sm-12">
				<input type="password" class="form-control" id="pwd-repeat" name="pwd-repeat" placeholder="Confirm Password">
			</div>
		</div>
	</div>
</div>

<button type="submit" name="submit" class="btn btn-primary">Sign in</button>
</form>
<?php include "../partials/footer.php"?>

