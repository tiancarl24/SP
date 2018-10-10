<?php 
include 'utils.php';
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
	<!-- jQuery -->
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

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
					<!-- <li><a id="CancelRes" class="btn btn-color1 call-to-action-button show-inquiry-modal ShowModal" href="ViewReservation.php">View Reservation</a></li> -->
					<li>
					</li>
				</ul>
				<!-- Nav-Links end -->
			</div>
		</div>
	</nav>
</section>
<!--Navigation Top end-->
<div class="wrapper">
	<div class="container">
		<div class="row">
			<br>
			<br>
			<div id="divpersonalinfo" name = "divpersonalinfo" style="width: 80%; height: auto; border: solid 2px orange; margin-right: auto; margin-left: auto; display: block">
				<!-- RESERVATION -->
				<div style="padding: 10px; color: orange; font-size: 20px;">
					<h2 class="hometext"><center>Reservation Details</center></h2>
					<?php 
					$RESID = $_GET['txtResID'];
					DBOpen();
					$rs = DBGetData(" SELECT * FROM reservations WHERE status <> 'Cancelled' AND reservationid = " .SQLs($RESID));
					$count = DBGetData(" SELECT COUNT(*) FROM reservations WHERE status <> 'Cancelled' AND reservationid = " .SQLs($RESID));

					DBClose();
					?>
					<br>
					<div id="divres" style="text-align: center; font-size: 30px; display: none">No Reservation Found.</div>
					<input type="hidden" id="txtcount" name="txtcount" value="<?php echo $count[0][0] ?>">
					<div class="row">
						<div class="col-md-6">
							<label>RESERVATION ID : </label><input type="text" class="" id="viewresid" name="viewresid" value="<?php echo $rs[0][22] ?>" style="border: none" readonly>
						</div>
						<br>
						<br>
						<div class="col-md-6">
							<label>CHECK IN :</label><input type="text" class="LabelInput" id="cin1" name="cin1" value="<?php echo $rs[0][9] ?>"  readonly>
						</div>
						<div class="col-md-6">
							<label>CHECK OUT :</label><input type="text" class="LabelInput" id="cout" name="cout" value="<?php echo $rs[0][10] ?>"  readonly>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>ROOM NO :</label><input type="text" class="LabelInput" id="roomno1" name="roomno1" value="<?php echo $rs[0][14] ?>"  readonly>
						</div>
						<div class="col-md-6">
							<label>ROOM TYPE  :</label><input type="text" class="LabelInput" id="roomtype1" name="roomtype1" value="<?php echo $rs[0][13] ?>" readonly >
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>ADULT :</label><input type="text" class="LabelInput" id="adult" name="adult" value="<?php echo $rs[0][5] ?>" readonly >
						</div>
						<div class="col-md-6">
							<label>CHILDREN :</label><input type="text" class="LabelInput" id="children" name="children" value="<?php echo $rs[0][6] ?>"  readonly>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>TOTAL PRICE :</label><input type="text" class="LabelInput" id="price" name="price" value="₱ <?php echo $rs[0][17] ?>"  readonly>
						</div>
						<div class="col-md-6">
							<label>TOTAL NIGHTS :</label><input type="text" class="LabelInput" id="days" name="days" value="<?php echo $rs[0][7] ?>"  readonly>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6"></div>
						<div class="col-md-6">
							<label>TOTAL PAID :</label><input type="text" class="LabelInput" id="totalprice" name="totalprice" value="₱ <?php echo $rs[0][21] ?>"  readonly>
						</div>
					</div>	
				</div>
				<div style="padding: 10px; color: orange; font-size: 20px;">
					<input type="hidden" id="lblValidate" name="lblValidate">

					<h2 class="hometext"><center>Personal Details</center></h2>
					<br>
					<div class="row">
						<div class="col-md-6">
							<label>NAME :</label><input type="text" class="LabelInput" id="name" name="name" value="<?php echo $rs[0][1] ?> <?php echo $RNo['LNAME'] ?>" readonly>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>PHONE :</label><input type="text" class="LabelInput" id="phone" name="phone" value="<?php echo $rs[0][3] ?>"  readonly>
						</div>
						<div class="col-md-6">
							<label>EMAIL :</label><input type="text" class="LabelInput" id="email" name="email" value="<?php echo $rs[0][20] ?>"  readonly>
						</div>
					</div>
				</div>
				<br>
				<div style="margin-right: auto; margin-left: auto; display: block;">
					<div class="row">
						<div class="col-lg-2 col-md-2"></div>
						<div class="col-md-4">
							<input type="submit" id="UploadDepoSlip" class="btn btn-inquiry-submit col-md-12" style="background-color: orange; color: white;" name="UploadDepoSlip" value="Upload Deposit Slip">
						</div>
						<div class="col-md-4">
							<input class="btn btn-inquiry-submit col-md-12" style="background-color: orange; color: white; width: 100%" type="button" id="btnCancelReservation" name="btnCancelReservation" value="Cancel Reservation">
						</div>
					</div>
				</div>
				<br>
			</div>
		</div>
	</div>
</div>


<form method="POST" action="function/CancelReservation.php">
	<div class="modal fade" id="CancelModal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<!--Modal header-->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
					<h4 class="modal-title"></h4>
				</div>
				<!--Modal body-->
				<div class="modal-body">
					<input type="hidden" id="reserveid" name="reserveid">
					<label style="font-size: 20px">Do you want to cancel this reservation?</label>
				</div>
				<!--Modal footer-->
				<div class="modal-footer">
					<button data-dismiss="modal" class="btn btn-default" type="button">No</button>
					<button id="btncancelyes" name="btncancelyes" class="btn btn-primary">Yes</button>
				</div>
			</div>
		</div>
	</div>
</form>

<script type="text/javascript">
	
	var btnCancelReservation = document.getElementById('btnCancelReservation');
	btnCancelReservation.onclick = function()
	{
		$.ajax(
		{
			type: "POST",
			url: "function/GetResID.php",
			data:
			{
				viewresid: viewresid.value
			},
			success: function(response)
			{
				var rs = JSON.parse(response);
				$('#CancelModal').modal();
				document.getElementById('reserveid').value = rs[0][0];
			}
		});
	}
</script>

<script src="bower_components/jquery-animatenumber/jquery.animateNumber.min.js"></script>
<script type="text/javascript">
	var ctr;
	var ctr_ID;
	var tableForAudit = $('#tblResDetails').DataTable();
	$('#tblResDetails').on( 'click', 'tr', function () 
	{
		var tblBudget = $('#tblResDetails').DataTable();
		if ( $(this).hasClass('selected') )
		{
			$(this).removeClass('selected');
			ctr_ID = null;
		}
		else 
		{
			tableForAudit.$('tr.selected').removeClass('selected');
			$(this).addClass('selected');
			ctr = tableForAudit.row(this).data();
			ctr_ID = ctr[0];

		}
	}); 
</script>

<script type="text/javascript">

	$(document).ready(function()
	{
		$("#btnHalf").click(function()
		{
			$(".OPT").val("Half");
		});
	});

	$(document).ready(function()
	{
		$("#btnFull").click(function()
		{
			$(".OPT").val("Full");
		});
	});
</script>
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
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>

<!--Start Style Switcher (remove before upload to Themeforest)-->
<script src="js/style-switcher.js"></script>
<!--End Style Switcher (remove before upload to Themeforest)-->

<script src="bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
<script src="bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="bower_components/jquery-animatenumber/jquery.animateNumber.min.js"></script>
<script src="bower_components/bootstrap-3-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script type="text/javascript">

if(txtcount.value == "0")
{
	document.getElementById('divres').style.display = "block";
}
else
{
	document.getElementById('divres').style.display = "none";
}
</script>

</body>
</html>


