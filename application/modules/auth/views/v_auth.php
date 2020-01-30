
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.radixtouch.in/templates/admin/lorax/source/light/pages/examples/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 17:15:15 GMT -->
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title>Lorax - Bootstrap 4 Admin Dashboard Template</title>
	<!-- Favicon-->
	<link rel="icon" href="<?php echo base_url()?>assets/images/favicon.ico" type="image/x-icon">
	<!-- Plugins Core Css -->
	<link href="<?php echo base_url()?>assets/css/app.min.css" rel="stylesheet">
	<!-- Custom Css -->
	<link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet" />
	<link href="<?php echo base_url()?>assets/css/pages/extra_pages.css" rel="stylesheet" />
</head>
<body class="light">
	<div class="loginmain">
		<div class="loginCard">
			<div class="login-btn splits">
				<p>Already an user?</p>
				<button class="active">Login</button>
			</div>
			<div class="rgstr-btn splits">
				<p>Don't have an account?</p>
				<button>Register</button>
			</div>
			<div class="wrapper">
				<form id="login" action="Auth/login" method="POST" tabindex="500">
					<h3>Login</h3>
					<div class="mail">
						<input type="text" name="username">
						<label>Mail or Username</label>
					</div>
					<div class="passwd">
						<input type="password" name="password">
						<label>Password</label>
					</div>
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Forgot password?
						</a>
					</div>
					<div class="submit">
						<button type="submit" name="submit" class="dark">Login</button>
					</div>
					<div class="flex-c p-b-112">
						<a href="#" class="login100-social-item bg-fb">
							<i class="fab fa-facebook-f"></i>
						</a>
						<a href="#" class="login100-social-item bg-twitter">
							<i class="fab fa-twitter"></i>
						</a>
						<a href="#" class="login100-social-item bg-google">
							<i class="fab fa-google"></i>
						</a>
					</div>
				</form>
				<form id="register" tabindex="502">
					<h3>Register</h3>
					<div class="name">
						<input type="text">
						<label>Full Name</label>
					</div>
					<div class="mail">
						<input type="email">
						<label>Mail</label>
					</div>
					<div class="uid">
						<input type="text">
						<label>User Name</label>
					</div>
					<div class="passwd">
						<input type="password">
						<label>Password</label>
					</div>
					<div class="submit">
						<button class="dark">Register</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Plugins Js -->
	<script src="<?php echo base_url()?>assets/js/app.min.js"></script>
	<!-- Extra page Js -->
	<script src="<?php echo base_url()?>assets/js/pages/examples/login-register.js"></script>
</body>

<!-- Mirrored from www.radixtouch.in/templates/admin/lorax/source/light/pages/examples/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 17:15:15 GMT -->
</html>