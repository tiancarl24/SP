<?php
include "utils.php";
?>
<?php $INFO = json_decode($_GET['Data'],true); 

?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Spring Plaza Hotel</title>
	<meta name="description"
	content="Accomodation is developed for hotels, motels, guest house and accommodation planning like Vacation Rentals, Homes, Apartments & Rooms and much more.">
	<meta name="author" content="Themeinjection.com">

	<!-- Bootstrap -->
	<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Bootstrap 3 Date Picker -->
	<link href="bower_components/bootstrap-3-datepicker/dist/css/bootstrap-datepicker.min.css" rel='stylesheet' type='text/css'>

	<!-- Google Open Sans Font -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

	<!-- Font Awesome -->
	<link href="bower_components/font-awesome/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

	<!-- Animate Css -->
	<link href="bower_components/animate.css/animate.min.css" rel='stylesheet' type='text/css'>

	<!-- Simple Line Icons -->
	<link href="bower_components/simple-line-icons/css/simple-line-icons.css" rel='stylesheet' type='text/css'>


	<!-- Theme Style -->
	<link rel="stylesheet" href="css/styles.css">
    <!-- Available main styles: styles-blue.css, styles-green.css, styles-orange.css, styles-pink.css,
    	styles-violet.css, styles-gray.css-->

    	<style>
    	form .website_hp{
    		display: none;
    	}
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="img/ico/favicon.png">

</head>
<body>
	<div id="page-top"></div>

	<!--Navigation Top start-->
	<section class="top-navbar container navbar-fixed-top">
		<nav class="navbar navbar-default" id="navigation-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
					data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!--Brand / Logo start-->
				<a class="navbar-brand scroll-to" href="#page-top">
					<img src="img/navbar-logo.png" class="img-responsive" alt="Accommodation Landing Page"/>
				</a>
				<!--Brand / Logo end-->
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<!-- Nav-Links start -->
				<ul class="nav navbar-nav navbar-right">
					<li><a class="scroll-to" href="index.php">Home</a></li>
				</ul>
			</div>
		</div>
	</nav>
</section>
<!--Navigation Top end-->
<!--Teaser Slider end-->

<!--Start content before Slider-->
<div class="content-after-slider">
	<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" onload="myFunction()">
		<div class="header">
			<div class="bg-color">
				<header id="main-header">
					<nav class="navbar navbar-default navbar-fixed-top">
						<div class="container">
						</div>
					</nav>
				</header>
				<div class="wrapper">
					<div class="container">
						<br>
						<div class="row">
							<br>
							<br>
							<br>
							<form method="GET" action="reservationdetails.php">
								<?php 
								$FNAME = $_SESSION['txtFirstname'];
								$LNAME = $_SESSION['txtLastname'];
								$ADDRESS = $_SESSION['txtAddress'];
								$ZIP = $_SESSION['txtZipcode'];
								$CITY = $_SESSION['txtCity'];
								$PHONE = $_SESSION['txtPhone'];
								$EMAIL = $_SESSION['txtEmail'];
								$ADDONS = $_SESSION['txtaddons'];
								$CIN = $_SESSION['datacin'];
								$COUT = $_SESSION['datacout'];
								$ADULT = $_SESSION['dataadult'];
								$CHILD = $_SESSION['datachild'];
								$RTYPE = $_SESSION['dataroomtype'];
								$AMOUNT = $_SESSION['dataamount'];
								$ROOMNO = $_SESSION['dataroomno'];
								$NIGHTS = $_SESSION['datanights'];
								?>
								<input type="hidden" id="datacin" name="datacin" value=" <?php echo $INFO['CIN'] ?> ">
								<input type="hidden" id="datacout" name="datacout" value=" <?php echo $INFO['COUT'] ?> ">
								<input type="hidden" id="dataadult" name="dataadult" value=" <?php echo $INFO['ADULT'] ?> ">
								<input type="hidden" id="datachild" name="datachild" value=" <?php echo $INFO['CHILD'] ?> ">
								<input type="hidden" id="dataroomtype" name="dataroomtype" value=" <?php echo $INFO['RTYPE'] ?> ">
								<input type="hidden" id="dataamount" name="dataamount" value=" <?php echo $INFO['AMOUNT'] ?> ">
								<input type="hidden" id="dataroomno" name="dataroomno" value=" <?php echo $INFO['ROOMNO'] ?> ">
								<input type="hidden" id="datanights" name="datanights" value=" <?php echo $INFO['DAYS'] ?> ">

								<h2>Personal Information</h2>

								<div class="form-group first-name-group">
									<label for="txtFirstname">First Name</label>
									<input type="text" name="txtFirstname" class="form-control" id="txtFirstname" placeholder="Enter your first name" required="">
								</div>
								<div class="form-group last-name-group">
									<label for="txtLastname">Last Name</label>
									<input type="text" name="txtLastname" class="form-control" id="txtLastname" placeholder="Enter your last name" required="">
								</div>
								<div class="clearfix"></div>
								<div class="form-group address-group">
									<label for="txtAddress">Address</label>
									<input type="text" name="txtAddress" class="form-control" id="txtAddress" placeholder="Enter your address" required="">
								</div>
								<div class="clearfix"></div>
								<div class="form-group zip-code-group">
									<label for="txtZipcode">Zip Code</label>
									<input type="number" name="txtZipcode" class="form-control" id="txtZipcode" placeholder="Enter your zip-code" >
								</div>
								<div class="form-group city-group">
									<label for="txtCity">City</label>
									<input type="text" name="txtCity" class="form-control" id="txtCity" placeholder="Enter your city" required="">
								</div>
								<div class="clearfix"></div>
								<div class="form-group phone-group">
									<label for="txtPhone">Phone</label>
									<input type="number" name="txtPhone" class="form-control" id="txtPhone" placeholder="Enter your phone no." maxlength="11" required="">
								</div>
								<div class="form-group email-group">
									<label for="txtEmail">Email</label>
									<input type="email" name="txtEmail" class="form-control" id="txtEmail" placeholder="Enter your email"  required="">
								</div>
								<h2>ADD ONS</h2>
								<div class="form-group phone-group">
									<input type="checkbox" name="txtaddons" id="txtaddons" value="1">
									<label for="txtaddons">EXTRA BED ₱ 200.00</label>
								</div>
								<div class="clearfix"></div>
								<div class="row">
									<div class="col-md-8"></div>
									<div class="col-md-4">
										<button type="submit" id="btnNext" name="btnNext" class="btn btn-inquiry-submit col-md-12" style="background-color: orange; color: white;">Next</button>
									</div>
								</div>
							</div> 
						</form>
					</div>
				</div>
			</div>
		</div>
		<section id="contact" class="section-padding wow fadeIn delay-05s">
			<div class="container">
				<div class="row">
					<center>
						© Copyright <a href="index.php" onclick="return confirm('Are you sure to Cancel your Reservation?');"> SPRING PLAZA HOTEL </a>. All Rights Reserved
					</center>
					<br>
				</div>
			</div>
		</section>
	</body>
	</html>
	<script type="text/javascript">
		var ctr;
		var ctr_ID;
		var tblSelectRoom = $('#tblSelectRoom').DataTable();
		$('#tblSelectRoom').on( 'click', 'tr', function () 
		{
			var tblBudget = $('#tblSelectRoom').DataTable();
			if ( $(this).hasClass('selected') )
			{
				$(this).removeClass('selected');
				ctr_ID = null;
			}
			else 
			{
				tblSelectRoom.$('tr.selected').removeClass('selected');
				$(this).addClass('selected');
				ctr = tblSelectRoom.row(this).data();
				ctr_ID = ctr[0];
			}
		}); 
	</script>

	<script type="text/javascript">
		$(document).ready(function()
		{
			$datetime1 = $NEWCIN;

			$datetime2 = $NEWCOUT;

			$difference = $datetime1->diff($datetime2);

			echo 'Difference: '.$difference->y.' years, ' 
			.$difference->m.' months, ' 
			.$difference->d.' days';

				// alert($difference);
			});
		</script>