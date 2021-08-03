<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html>

<head>
	<title>Student Registration Form Flat Responsive widget Template :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Student Registration Form Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	{literal}
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
	<!-- /fonts -->
	<!-- css -->
	<link href="reg2/css/bootstrap.css" rel="stylesheet" type='text/css' media="all" />
	<link href="reg2/css/style.css" rel="stylesheet" type='text/css' media="all" />
	<!-- /css -->
</head>

<body>

	<div class="content-agileits">
		<h1 class="title">Staff
		 Registration Form</h1>
		<div class="left">
			<form action="#" method="post" data-toggle="validator">
				<input type="hidden" name="hide" value="h">
				<div class="form-group">
					<label for="staffname" class="control-label">Staff Name:</label>
					<input type="text" class="form-control" name="staffname" id="name" placeholder="Staff Name" data-error="Enter Your Name" required>
					<div class="help-block with-errors"></div>
				</div>

			   <div class="form-group">
					<label for="staffid" class="control-label">Staff ID:</label>
					<input type="text" class="form-control" name="staffid" id="staffid" placeholder="Staff ID" data-error="Enter Your ID" required>
					<div class="help-block with-errors"></div>
				</div>

				<div class="form-group">
					<label for="Phone" class="control-label">Contact Number:</label>
					<input type="number" class="form-control" name="contactno" id="contactno" placeholder="Contact Number" data-error="Enter Your Contact Number" required>
					<div class="help-block with-errors"></div>
				</div>

				<div class="form-group w3ls-opt">
					<label for="Gender" class="control-label">Gender</label>

					<label class="w3layouts">
						<input type="radio" name="gender" id="gender" value="male" checked>Male
					</label>
					<label class="w3layouts label2">
						<input type="radio" name="gender" id="gender" value="female">Female
					</label>
				</div>


				<div class="form-group">
					<label for="DOB" class="control-label">DOB:</label>
					<input type="date" class="form-control" name="dob" id="dob" data-error="Enter DOB" required>
					<div class="help-block with-errors"></div>
				</div>
				
				<div class="form-group">
					<label for="Email" class="control-label">Email:</label>
					<input type="email" class="form-control" name="email" id="Email" placeholder="Email" data-error="This email address is invalid" required>
					<div class="help-block with-errors"></div>
				</div>

				

					<div class="form-group">
					<label for="inputPassword" class="control-label">Password:</label>
					<div class="form-inline row">
						<div class="form-group col-sm-6 agileits-w3layouts">
							<input type="password" data-minlength="6" name="pass" class="form-control" id="inputPassword" placeholder="Password" required>
							<div class="help-block">Minimum of 6 characters</div>
						</div>
						<div class="form-group col-sm-6 w3-agile">
							<input type="password" class="form-control" name="confirmpass" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match"
							    placeholder="Confirm Password" required>
							<div class="help-block with-errors"></div>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-lg">submit</button>
				</div>
			</form>
		</div>
		<div class="right"></div>
		<div class="clear"></div>
	</div>
	<p class="copyright-w3ls">© 2017 Student Registration Form. All Rights Reserved | Design by
		<a href="https://w3layouts.com/" target="_blank">W3layouts</a>
	</p>
	<!-- js -->
	<script src="reg2/js/jquery-2.1.4.min.js"></script>
	<!-- //js -->

	<script src="reg2/js/bootstrap.min.js"></script>
	<script src="reg2/js/validator.min.js"></script>
	<!-- /js files -->
	{/literal}
</body>

</html>