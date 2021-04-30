<div class="container-fluid" id="landing-settings">
	<div class="row">
	<!--<button type="button" class="btn btn-outline-dark">
		<a><i class="fa fa-cchevron-left"></i></a>
		asdasdasd
	</button>-->
		<div class="col-sm-3">
            <button type="button" class="btn btn-primary mt-5" name="lsbutton" id="lsbutton">temp button for home</button>
		</div>
		<div class="col-sm-6" id="landing-settings-middlecontent">
			<div class="row">
				<div class="col-sm-3" style="border:1px outset red;">
					<div class="sidenav nav nav-tabs">
						<ul class="">
							
                            <li><a class="nav-link" href="#landingSettings1" id="landingSettings1button"><i class="fa fa-user" aria-hidden="true"> </i> Edit Profile</a></li>
							<li><a class="nav-link" href="#landingSettings2" id="landingSettings2button"><i class="fa fa-lock" aria-hidden="true"> </i> Security</a></li>
							<li><a class="nav-link" href="#landingSettings3" id="landingSettings3button"><i class="fa fa-cog" aria-hidden="true"></i> Button 3</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-9" style="border:1px outset black;">
                    <div class="tab-content">
                        <div class="tab-pane landing-settings-div active" id="landingSettings1">
                            <form id="editDp">
                            <h3>Edit profile</h3>
                            <div class="row">
                                <div class="col-3 mb-2">
                                    <img src="<?php echo $eskwela_home; ?>/images/profilepic1.jpg" alt="" id="profilePicEdit" >
                                </div>
                                <div class="col-3">
                                    <form action="POST" enctype="multipart/form-data" id="submitprofilepic" name="submitprofilepic">
                                        <input type="file" class="form-control-file" name="profilepicfile" id="profilepicfile" accept="image/*">
                                    </form>
                                </div>
                                <div class="col-3">
                                    <img src="<?php echo $eskwela_home; ?>/images/profilepic1.jpg" alt="" id="profilePicEdit" >
                                </div>
                                <div class="col-3">
                                    <button type="button" name="chdpsubmit" id="chdpsubmit" class="btn btn-outline-primary">Change profile picture</button>
                                </div>
                            </div>
                            
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
                        <div class="tab-pane landing-settings-div" id="landingSettings2">
                            <h5>Change Password </h5>
                            <form>
                            <div class="row">
                                <div class="col-5">
                                    <label for="settings-pwd" class="form-label">Password:</label>
                                    <input type="password" name="settings-pwd" id="settings-pwd" class="form-control">
                                    <label for="settings-pwd2" class="form-label">Confirm Password:</label>
                                    <input type="password" name="settings-pwd2" id="settings-pwd2" class="form-control">
                                    <b class="form-text text-danger" id="settings-passwordError"></b>
                                </div>
                                <div class="col-7 ml-1">
                                    <div class="col-12">
                                        <p>Password Requirements:</p>
                                    </div>
                                    <div class="col-12" id="settings-pwdError">
                                        <b class="form-text text-danger"></b>
                                    </div>
                                </div>
                            </div>
                            <div class="row col-sm-12 mt-3">
								<button type="button" class="btn btn-outline-primary col-sm-3" name="settings-chpwd-submit"
									id="settings-chpwd-submit"> Change Password</button>
                                    <b class="form-text text-danger" id="settings-errMsgTxt"></b>
							</div>
                        </form>
                        </div>
                        <div class="tab-pane landing-settings-div" id="landingSettings3">
                        <h5>Button 3</h5>
                        </div>
                    </div>
                </div>
			</div>
		</div>
		<div class="col-sm-3">
			Right side
		</div>
	</div>
</div>