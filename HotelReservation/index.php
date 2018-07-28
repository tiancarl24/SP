<?php 
include 'utils.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login page | Nifty - Admin Template</title>

	<!--STYLESHEET-->
	<!--Open Sans Font [ OPTIONAL ]-->
	<link rel="icon" type="image" href="Library/images/favicon.png">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<!--Bootstrap Stylesheet [ REQUIRED ]-->
	<link href="Library/css/bootstrap.min.css" rel="stylesheet">
	<!--Nifty Stylesheet [ REQUIRED ]-->
	<link href="Library/css/nifty.css" rel="stylesheet">
	<!--Nifty Premium Icon [ DEMONSTRATION ]-->
	<link href="Library/css/demo/nifty-demo-icons.min.css" rel="stylesheet">
	<!--Demo [ DEMONSTRATION ]-->
	<link href="Library/css/demo/nifty-demo.min.css" rel="stylesheet">
	<!--Magic Checkbox [ OPTIONAL ]-->
	<link href="Library/plugins/magic-check/css/magic-check.min.css" rel="stylesheet">
	<!--JAVASCRIPT-->
	<!--Pace - Page Load Progress Par [OPTIONAL]-->
	<link href="Library/plugins/pace/pace.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="Library/style.css">
	<script src="Library/plugins/pace/pace.min.js"></script>
	<!--jQuery [ REQUIRED ]-->
	<script src="Library/js/jquery-2.2.4.min.js"></script>
	<!--BootstrapJS [ RECOMMENDED ]-->
	<script src="Library/js/bootstrap.min.js"></script>
	<!--NiftyJS [ RECOMMENDED ]-->
	<script src="Library/js/nifty.min.js"></script>
</head>
<body>
	<div id="container" class="cls-container">
		
		<!-- BACKGROUND IMAGE -->
		<div id="bg-overlay"></div>
		
		<!-- LOGIN FORM -->
		<div class="cls-content">
			<div class="cls-content-sm panel">
				<div class="panel-body">
					<div class="mar-ver pad-btm">
						<h3 class="h4 mar-no">Hotel Spring Plaza</h3>
						<p class="text-muted">Sign In to your account</p>
					</div>
					<form action="login.php" method="POST">
						<div class="form-group">
							<input type="text" id="txtUsername" name="txtUsername" class="form-control" placeholder="Username" autofocus>
						</div>
						<div class="form-group">
							<input type="password" id="txtPassword" name="txtPassword" class="form-control" placeholder="Password">
						</div>
						<div class="checkbox pad-btm text-left">
							<input id="demo-form-checkbox" class="magic-checkbox" type="checkbox">
							<label for="demo-form-checkbox">Remember me</label>
						</div>
						<div style="color:red"><?=$_POST["msg"]?></div>
						<button class="btn btn-primary btn-lg btn-block" type="submit">Sign In</button>
					</form>
				</div>

				<div class="pad-all">
					<a href="pages-password-reminder.html" class="btn-link mar-rgt">Forgot password ?</a>
					<a href="pages-register.html" class="btn-link mar-lft">Create a new account</a>
				</div>
			</div>
		</div>	
	</div>
</body>
</html>
