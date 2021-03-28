<?php include "../partials/header.php"?>
<div class="">
	<div class="container my-5">
		<div class="row">
			<div class="tab-content col-sm-5 p-0">
				<div class="tab-pane active" id="stuRegis">
					<div class="px-5 pt-5 pb-3" id="regisTitle">
						<h3>Be the Change pero student ka</h3>
					</div>
					<div class="px-5 pt-3 pb-5 mb-5" id="regisContent">
						<p>BE different.
							BE you.
							BE the change.
							
							Join us to start learning the e-skwela way. You can view all our courses for FREE.
							
							By signing up for e-skwela, you agree to our Terms of Use and Privacy Policy.
						</p>
					</div>
				</div>
				<div class="tab-pane" id="teaRegis">
					<div class="px-5 pt-5 pb-3" id="regisTitle">
						<h3>Be the Change pero teacher ka</h3>
					</div>

					<div class="px-5 pt-3 pb-5 mb-5" id="regisContent">
						<p>TEACHER Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores molestiae autem
							temporibus voluptatibus doloribus? Odit,
							blanditiis voluptatem explicabo, sint rem consectetur, beatae doloremque iste totam minus
							distinctio omnis accusantium quod.
						</p>
					</div>
				</div>
			</div>

			<div id="formRegis" class="col-sm-7 p-0">
				<form action="<?php echo $eskwela_home; ?>/includes/registration.php" method="POST">
					<ul class="nav nav-tabs">
						<li><a class="nav-link active" href="#step-1" id="step1">Step 1 <br /><small>
									Basic Information</small></a></li>
						<li><a class="nav-link disabled" href="#step-2" id="step2">Step 2 <br /><small>
									Personal Details</small></a></li>
						<li><a class="nav-link disabled" href="#step-3" id="step3">Step 3 <br /><small>
									Account Details</small></a></li>
						<li><a class="nav-link disabled" href="#step-4" id="step4">Step 4 <br /><small>
									Privacy Policy</small></a></li>
					</ul>
					<div class="tab-content">
						<div id="step-1" class="tab-pane active" role="tabpanel">
							<h3>Register to E-skwela as: </h3>
							<ul class="nav nav-pills">
								<li>
									<a href="#studentTab" class="nav-link active" id="stu" data-toggle="pill"> Student
									</a>
								</li>
								<li>
									<a href="#teacherTab" class="nav-link" id="tea" data-toggle="pill"> Teacher </a>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="studentTab" role="tabpanel">
									<div class="container mt-2 form-group">
										<div class="row col-sm-12">
											<h5>student login form </h5>
											<a href="#" class="twitter btn">
												<i class="fa fa-twitter fa-fw"></i> Login with Twitter
											</a>
											<a href="#" class="google btn">
												<i class="fa fa-google fa-fw"></i> Login with Google+
											</a>
										</div>
										<div class="row">
											<a href="#emailRegStu" class="google btn nav-link" id="emailButtonStu"
												data-toggle="pill">
												<i class="fa fa-envelope fa-fw"></i> Login with Email
											</a>
										</div>
										<div class="tab-content">
											<div class="tab-pane" id="emailRegStu" role="tabpanel">
												<div class="row justify-self-center py-3">
													<div class="col-3 mb-1 px-0">
														<label class="col-form-label col-sm-4 justify-self-center"
															for="emailInput">E-Mail</label>
													</div>
													<div class="col-9 ">
														<input type="text" class="form-control" name="stuEmail"
															id="stuEmail">
														<input type="number" name="usertypes" id="usertypes" value="2"
															hidden>
														<b class="form-text text-danger" id="stuEmailError"></b>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="teacherTab" role="tabpanel">
									<div class="container mt-2">
										<div class="row">
											<h5>teacher login form </h5>
											<a href="#" class="twitter btn">
												<i class="fa fa-twitter fa-fw"></i> Login with Twitter
											</a>
											<a href="#" class="google btn">
												<i class="fa fa-google fa-fw"></i> Login with Google+
											</a>
										</div>
										<div class="row">
											<a href="#emailRegTea" class="google btn nav-link" id="emailButtonTea"
												data-toggle="pill">
												<i class="fa fa-envelope fa-fw"></i> Login with Email
											</a>
										</div>
										<div class="tab-content">
											<div class="tab-pane" id="emailRegTea" role="tabpanel">
												<div class="row justify-self-center py-3">
													<div class="col-3 mb-1 px-0">
														<label class="col-form-label col-sm-4 justify-self-center"
															for="emailInput">E-Mail</label>
													</div>
													<div class="col-9 ">
														<input type="text" class="form-control" name="teaEmail"
															id="teaEmail">
														<input type="number" name="usertypet" id="usertypet" value="1"
															hidden>
														<b class="form-text text-danger" id="teaEmailError"></b>
													</div>
												</div>
												<b class="form-text text-danger" id="emailError"></b>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row mt-3">
								<button type="button" class="btn btn-outline-primary col-sm-3" id="next-1">
									Next</button>
							</div>
						</div>
						<div id="step-2" class="tab-pane" role="tabpanel">
							Step 2 content
							<div class="row justify-content-start">
								<div class="col-sm-6">
									<label class="col-form-label col-sm-4 justify-self-center" for="firstName">First
										Name:</label>
									<input class="form-control" type="text" name="firstName" id="firstName">
								</div>
								<div class="col-sm-6">
									<label class="col-form-label col-sm-4 justify-self-center" for="lastName">Last
										Name:</label>
									<input class="form-control" type="text" name="lastName" id="lastName">
								</div>
							</div>
							<div class="row justify-content-start">
								<div class="col-sm-6">
									<b class="form-text text-danger" id="firstNameError"></b>
								</div>
								<div class="col-sm-6">
									<b class="form-text text-danger" id="lastNameError"></b>
								</div>
							</div>
							<div class="row justify-content-start mt-3">
								<h5>Date of birth:</h5>
								<div class="col-sm-3">
									<label for="dobMonth" class="form-label">Month</label>
									<select class="form-control" name="dobMonth" id="dobMonth" name="dobMonth">
										<option value="1">January</option>
										<option value="2">February</option>
										<option value="3">March</option>
										<option value="4">April</option>
										<option value="5">May</option>
										<option value="6">June</option>
										<option value="7">July</option>
										<option value="8">August</option>
										<option value="9">September</option>
										<option value="10">October</option>
										<option value="11">November</option>
										<option value="12">December</option>
									</select>
								</div>
								<div class="col-sm-3">
									<label for="dobDay" class="form-label">Day</label>
									<input type="number" name="dobDay" id="dobDay" class="form-control">
								</div>
								<div class="col-sm-3">
									<label for="dobYear" class="form-label">Year</label>
									<input type="number" name="dobYear" id="dobYear" class="form-control" min="1940" max="2020">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3">
									<b class="form-text text-danger" id="dobMonthError"></b>
								</div>
								<div class="col-sm-3">
									<b class="form-text text-danger" id="dobDayError"></b>
								</div>
								<div class="col-sm-3">
									<b class="form-text text-danger" id="dobYearError"></b>
								</div>
							</div>
							<div class="row justify-content-start">
								<div class="form-group mt-1">
									<label class="form-label" for="exampleFormControlSelect1">Example select</label>
									<select class="form-control" id="region" name="region">
										<option value="NCR">NCR</option>
										<option value="CAR">CAR</option>
										<option value="Region I">Region I</option>
										<option value="Region II">Region II</option>
										<option value="Region III">Region III</option>
										<option value="Region IV-A">Region IV-A</option>
										<option value="Region IV-B">Region IV-B</option>
										<option value="Region V">Region V</option>
										<option value="Region VI">Region VI</option>
										<option value="Region VII">Region VII</option>
										<option value="Region VIII">Region VIII</option>
										<option value="Region IX">Region IX</option>
										<option value="Region X">Region X</option>
										<option value="Region XI">Region XI</option>
										<option value="Region XII">Region XII</option>
										<option value="CARAGA">CARAGA</option>
										<option value="ARMM">ARMM</option>
									</select>
								</div>
							</div>
							<div class="row col-sm-12 mt-3">
								<button type="button" class="btn btn-outline-primary col-sm-3" id="next-2">
									Next</button>
							</div>
							<div class="row col-sm-12 mt-3">
								<button type="button" class="btn btn-outline-primary col-sm-3" id="prev-2">
									Previous</button>
							</div>
						</div>
						<div id="step-3" class="tab-pane" role="tabpanel">
							Step 4 content
							<div class="row">
								<div class="col-5">
									<label for="usernameRegis" id="labelUser" class="form-label">Username:</label>
									<div class="input-group mb-2">
										<div class="input-group-prepend">
											<div class="input-group-text">@</div>
										</div>
										<input type="text" class="form-control" id="usernameRegis" name="usernameRegis" placeholder="Username">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-6" id="usercheckdiv">
									<span id="usercheck" class="help-block"></span>
								</div>
							</div>
							<div class="row">
								<div class="col-5">
									<label for="pwd" class="form-label">Password:</label>
									<input type="password" name="pwd" id="pwd" class="form-control">
									<label for="pwd2" class="form-label">Confirm Password:</label>
									<input type="password" name="pwd2" id="pwd2" class="form-control">
									<b class="form-text text-danger" id="passwordError"></b>
								</div>
								<div class="col-7 ml-1">
									<div class="col-12">
										<p>Password Requirements:</p>
									</div>
									<div class="col-12" id="pwdError">
										<b class="form-text text-danger"></b>
									</div>

								</div>
							</div>
							<div class="row col-sm-12 mt-3">
								<button type="button" class="btn btn-outline-primary col-sm-3" id="next-3">
									Next</button>
							</div>
							<div class="row col-sm-12 mt-3">
								<button type="button" class="btn btn-outline-primary col-sm-3" id="prev-3">
									Previous</button>
							</div>
						</div>
						<div id="step-4" class="tab-pane" role="tabpanel">
							Step 4 content
							<div class="col-sm-12 overflow-auto" style="height:400px;">
								<h4>Terms and conditions</h4>
								<p><span><h1>Privacy Policy for E-Skwela</h1>

									<p>At e-skwela, accessible from e-skwela.com, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by e-skwela and how we use it.</p>
									
									<p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>
									
									<p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in e-skwela. This policy is not applicable to any information collected offline or via channels other than this website. Our Privacy Policy was created with the help of the <a href="https://www.privacypolicygenerator.info/#wizard">Free Privacy Policy Generator</a>.</p>
									
									<h2>Consent</h2>
									
									<p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>
									
									<h2>Information we collect</h2>
									
									<p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>
									<p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>
									<p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>
									
									<h2>How we use your information</h2>
									
									<p>We use the information we collect in various ways, including to:</p>
									
									<ul>
									<li>Provide, operate, and maintain our webste</li>
									<li>Improve, personalize, and expand our webste</li>
									<li>Understand and analyze how you use our webste</li>
									<li>Develop new products, services, features, and functionality</li>
									<li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the webste, and for marketing and promotional purposes</li>
									<li>Send you emails</li>
									<li>Find and prevent fraud</li>
									</ul>
									
									<h2>Log Files</h2>
									
									<p>e-skwela follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information.</p>
									
									<h2>Cookies and Web Beacons</h2>
									
									<p>Like any other website, e-skwela uses 'cookies'. These cookies are used to store information including visitors' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information.</p>
									
									<p>For more general information on cookies, please read <a href="https://www.privacypolicyonline.com/what-are-cookies/">"What Are Cookies" from Cookie Consent</a>.</p>
									
									<h2>Google DoubleClick DART Cookie</h2>
									
									<p>Google is one of a third-party vendor on our site. It also uses cookies, known as DART cookies, to serve ads to our site visitors based upon their visit to www.website.com and other sites on the internet. However, visitors may choose to decline the use of DART cookies by visiting the Google ad and content network Privacy Policy at the following URL – <a href="https://policies.google.com/technologies/ads">https://policies.google.com/technologies/ads</a></p>
									
									<h2>Our Advertising Partners</h2>
									
									<p>Some of advertisers on our site may use cookies and web beacons. Our advertising partners are listed below. Each of our advertising partners has their own Privacy Policy for their policies on user data. For easier access, we hyperlinked to their Privacy Policies below.</p>
									
									<ul>
										<li>
											<p>Google</p>
											<p><a href="https://policies.google.com/technologies/ads">https://policies.google.com/technologies/ads</a></p>
										</li>
									</ul>
									
									<h2>Advertising Partners Privacy Policies</h2>
									
									<P>You may consult this list to find the Privacy Policy for each of the advertising partners of e-skwela.</p>
									
									<p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on e-skwela, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>
									
									<p>Note that e-skwela has no access to or control over these cookies that are used by third-party advertisers.</p>
									
									<h2>Third Party Privacy Policies</h2>
									
									<p>e-skwela's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. </p>
									
									<p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites.</p>
									
									<h2>CCPA Privacy Rights (Do Not Sell My Personal Information)</h2>
									
									<p>Under the CCPA, among other rights, California consumers have the right to:</p>
									<p>Request that a business that collects a consumer's personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p>
									<p>Request that a business delete any personal data about the consumer that a business has collected.</p>
									<p>Request that a business that sells a consumer's personal data, not sell the consumer's personal data.</p>
									<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>
									
									<h2>GDPR Data Protection Rights</h2>
									
									<p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>
									<p>The right to access – You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>
									<p>The right to rectification – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>
									<p>The right to erasure – You have the right to request that we erase your personal data, under certain conditions.</p>
									<p>The right to restrict processing – You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>
									<p>The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.</p>
									<p>The right to data portability – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>
									<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>
									
									<h2>Children's Information</h2>
									
									<p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>
									
									<p>e-skwela does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>
							</div>
							<div class="row">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1" required>
									<label class="form-check-label" for="exampleCheck1">Check me out</label>
								  </div>
							</div>
							<div class="row">
								<b class="form-text text-danger" id="termsError">Agree to the terms and conditions to create an account. </b>
							</div>
							<div class="row col-sm-12 mt-3">
								<button type="submit" class="btn btn-outline-primary col-sm-3" name="submit"
									id="submit"> Submit</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<?php include "../partials/footer.php"?>