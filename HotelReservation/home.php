<?php 
include "incSecure.php";
include "incHeader.php";
include "incSidenav.php";
include 'utils.php';
?>
<?php
DBOpen();
$RAT = DBGetData(" SELECT * from roominformation where roomno NOT IN (SELECT roomno from reservedate where checkin between '$maniladate' AND '$maniladate' or Checkout between '$maniladate' and '$maniladate') AND roomavailability = 'Available' ");

$CRAT = DBGetData(" SELECT COUNT(*) from roominformation where roomno NOT IN (SELECT roomno from reservedate where checkin between '$maniladate' AND '$maniladate' or Checkout between '$maniladate' and '$maniladate') AND roomavailability = 'Available' ");

$RAT2 = DBGetData(" SELECT * from roominformation where roomno NOT IN (SELECT roomno from reservedate where checkin between '$maniladate' AND '$maniladate' or Checkout between '$maniladate' and '$maniladate') AND roomavailability = 'Available' GROUP BY RoomID");

$PR = DBGetData(" SELECT COUNT(*) FROM reservations WHERE Status = 'Pending' ");

$TS = DBGetData(" SELECT SUM(TotalPaid) FROM reservations ");
DBClose();
?>
<div class="boxed">

	<!--CONTENT CONTAINER-->
	<!--===================================================-->
	<div id="content-container">
		<!--Page Title-->
		<div id="page-title">
			<h1 class="page-header text-overflow">Dashboard</h1>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="panel panel-primary panel-colorful">
						<div class="pad-all media" id="AvailableRooms" style="cursor: pointer;">
							<div class="media-left">
								<i class="pli-warehouse icon-3x icon-fw"></i>
							</div>
							<div class="media-body">
								<p class="h3 text-light mar-no media-heading"><?=$CRAT[0][0]?></p>
								<span id="">Available Rooms Today</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="panel panel-warning panel-colorful">
						<div class="pad-all media" id="PendingReservation" style="cursor: pointer;">
							<div class="media-left">
								<i class="pli-note icon-3x icon-fw"></i>
							</div>
							<div class="media-body">
								<p class="h3 text-light mar-no media-heading"><?=$PR[0][0]?></p>
								<span id="">Pending Reservations</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel panel-success panel-colorful">
							<div class="pad-all media" id="TodaySales" style="cursor: pointer;">
								<div class="media-left">
									<i class="pli-money-bag icon-3x icon-fw"></i>
								</div>
								<div class="media-body">
									<p class="h3 text-light mar-no media-heading">₱ <?=$TS[0][0]?></p>
									<span id="">Total Sales for Today</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="panel panel-danger panel-colorful">
							<div class="pad-all media" id="TodayReserved" style="cursor: pointer;">
								<div class="media-left">
									<i class="demo-pli-male icon-3x icon-fw"></i>
								</div>
								<div class="media-body">
									<p class="h3 text-light mar-no media-heading"><?=$PR[0][0]?></p>
									<span id="">Person Reserve Today</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="panel">
						<div class="panel-heading">
							<br>
							<span class="panel-title">
								<span>NEED TO CHECK IN TODAY</span>
							</span>
						</div>
						<div class="panel-body">
							<?php
							DBOpen();

							$CI = DBGetData("SELECT * FROM reservations WHERE CheckinDate = '$maniladate' AND CheckinStatus = '' AND status = 'Approved' ");
							if($CI == null)
							{
								wr(" <table id = 'tblMembership' name = 'tblMembership' class = 'table table-bordered table-striped' style = 'font-size: 13px;'> ");
								wr(" <thead> ");
								wr("  <tr> ");
								wr(" <th><center>ResID</center></th> ");
								wr(" <th><center>Name</center></th> ");
								wr(" <th><center>Date</center></th> ");
								wr(" <th><center>Time</center></th> ");
								wr(" </tr> ");
								wr(" </thead> ");
								wr(" <tbody> ");
								wr(" <tr> ");
								wr(" <td style='color: red;'>No data available in table</td>");
								wr(" <td></td>");
								wr(" <td></td>");
								wr(" <td></td>");
								wr(" </tr> ");
								wr(" </tbody> ");
								wr(" </table> ");
								wr("No data available in table");
								wr("<br>");
							}
							else
							{
								wr(" <table id = 'tblMembership' name = 'tblMembership' class = 'table table-bordered table-striped' style = 'font-size: 13px;'> ");
								wr(" <thead> ");
								wr(" <tr> ");
								wr(" <th><center>ResID</center></th> ");
								wr(" <th><center>Name</center></th> ");
								wr(" <th><center>Date</center></th> ");
								wr(" <th><center>Time</center></th> ");
								wr(" </tr> ");
								wr(" </thead> ");
								wr(" <tbody> ");
								foreach($CI as $CI)
								{
									wr(" <tr> ");
									wr(" <td style='text-align: center';>$CI[22]</td> ");
									wr(" <td style='text-align: center';>$CI[1] $CI[2]</td> ");
									wr(" <td style='text-align: center';>$CI[9]</td> ");
									wr(" <td style='text-align: center';>$CI[11]</td> ");
							// wr(" <td>$rs[4]</td> ");
									wr(" </tr> ");
								}
								wr(" </tbody> ");
								wr(" </table> ");
							}
							DBClose();
							wrBtn("button","btnCheckIN","Check In","col-sm-4 Right","bluegreen");
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="panel">
						<div class="panel-heading">
							<br>
							<span class="panel-title">
								<span>NEED TO CHECK OUT TODAY</span>
							</span>
						</div>
						<div class="panel-body">
							<?php
							DBOpen();

							$CO = DBGetData("SELECT * FROM reservations WHERE CheckoutDate = '$maniladate' AND CheckinStatus = 'Checkin'");
							if($CO == null)
							{
								wr(" <table id = 'tblCheckOut' name = 'tblCheckOut' class = 'table table-bordered table-striped' style = 'font-size: 13px;'> ");
								wr(" <thead> ");
								wr("  <tr> ");
								wr(" <th><center>ResID</center></th> ");
								wr(" <th><center>Name</center></th> ");
								wr(" <th><center>Date</center></th> ");
								wr(" <th><center>Time</center></th> ");
								wr(" </tr> ");
								wr(" </thead> ");
								wr(" <tbody> ");
								wr(" <tr> ");
								wr(" <td style='color: red;'>No data available in table</td>");
								wr(" <td></td>");
								wr(" <td></td>");
								wr(" <td></td>");
								wr(" </tr> ");
								wr(" </tbody> ");
								wr(" </table> ");
								wr("No data available in table");
								wr("<br>");
							}
							else
							{
								wr(" <table id = 'tblCheckOut' name = 'tblCheckOut' class = 'table table-bordered table-striped' style = 'font-size: 13px;'> ");
								wr(" <thead> ");
								wr(" <tr> ");
								wr(" <th><center>ResID</center></th> ");
								wr(" <th><center>Name</center></th> ");
								wr(" <th><center>Date</center></th> ");
								wr(" <th><center>Time</center></th> ");
								wr(" </tr> ");
								wr(" </thead> ");
								wr(" <tbody> ");
								foreach($CO as $CO)
								{
									wr(" <tr> ");
									wr(" <td style='text-align: center';>$CO[22]</td> ");
									wr(" <td style='text-align: center';>$CO[1] $CO[2]</td> ");
									wr(" <td style='text-align: center';>$CO[9]</td> ");
									wr(" <td style='text-align: center';>$CO[11]</td> ");
							// wr(" <td>$rs[4]</td> ");
									wr(" </tr> ");
								}
								wr(" </tbody> ");
								wr(" </table> ");
							}
							DBClose();
							wrBtn("button","btnCheckOUT","Check Out","col-sm-4 Right","bluegreen");
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<form method="POST">
		<div class="modal fade" id="ModalTodayReserved" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">

					<!--Modal header-->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
						<h4 class="modal-title">Person Reserved Today</h4>
					</div>

					<!--Modal body-->
					<div class="modal-body">
						<?php
						DBOpen();

						$RESE = DBGetData("SELECT * FROM reservations WHERE CheckoutDate = '$maniladate'");
						if($RESE == null)
						{
							wr(" <table id = 'tblCheckOut' name = 'tblCheckOut' class = 'table table-bordered table-striped' style = 'font-size: 13px;'> ");
							wr(" <thead> ");
							wr("  <tr> ");
							wr(" <th><center>ResID</center></th> ");
							wr(" <th><center>Name</center></th> ");
							wr(" <th><center>Room Type</center></th> ");
							wr(" <th><center>Mode Of Payment</center></th> ");
							wr(" <th><center>Date</center></th> ");
							wr(" <th><center>Time</center></th> ");
							wr(" </tr> ");
							wr(" </thead> ");
							wr(" <tbody> ");
							wr(" <tr> ");
							wr(" <td style='color: red;'>No data available in table</td>");
							wr(" <td></td>");
							wr(" <td></td>");
							wr(" <td></td>");
							wr(" <td></td>");
							wr(" <td></td>");
							wr(" </tr> ");
							wr(" </tbody> ");
							wr(" </table> ");
							wr("No data available in table");
							wr("<br>");
						}
						else
						{
							wr(" <table id = 'tblCheckOut' name = 'tblCheckOut' class = 'table table-bordered table-striped' style = 'font-size: 13px;'> ");
							wr(" <thead> ");
							wr(" <tr> ");
							wr(" <th><center>ResID</center></th> ");
							wr(" <th><center>Name</center></th> ");
							wr(" <th><center>Room Type</center></th> ");
							wr(" <th><center>Mode Of Payment</center></th> ");
							wr(" <th><center>Date</center></th> ");
							wr(" <th><center>Time</center></th> ");
							wr(" </tr> ");
							wr(" </thead> ");
							wr(" <tbody> ");
							foreach($RESE as $RESE)
							{
								wr(" <tr> ");
								wr(" <td style='text-align: center';>$RESE[22]</td> ");
								wr(" <td style='text-align: center';>$RESE[1] $RESE[2]</td> ");
								wr(" <td style='text-align: center';>$RESE[13]</td> ");
								wr(" <td style='text-align: center';>$RESE[15]</td> ");
								wr(" <td style='text-align: center';>$RESE[9]</td> ");
								wr(" <td style='text-align: center';>$RESE[11]</td> ");
							// wr(" <td>$rs[4]</td> ");
								wr(" </tr> ");
							}
							wr(" </tbody> ");
							wr(" </table> ");
						}
						DBClose();
						?>
					</div>
					<br>
					<br>
					<!--Modal footer-->
					<div class="modal-footer">
						<button data-dismiss="modal" class="btn btn-default" type="button">No</button>
						<input type="submit" id="btnYes" name="btnYes" class="btn btn-danger" value="Yes">
					</div>
				</div>
			</div>
		</div>
	</form>
	<form method="POST">
		<div class="modal fade" id="ModalTotalSales" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">

					<!--Modal header-->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
						<h4 class="modal-title">Total Sales Today</h4>
					</div>

					<!--Modal body-->
					<div class="modal-body">
						<?php
						DBOpen();

						$RESE = DBGetData("SELECT RoomType, sum(TotalPaid) from reservations WHERE Status = 'Approved' GROUP BY RoomType ");
						if($RESE == null)
						{
							wr(" <table id = 'tblCheckOut' name = 'tblCheckOut' class = 'table table-bordered table-striped' style = 'font-size: 13px;'> ");
							wr(" <thead> ");
							wr("  <tr> ");
							wr(" <th><center>Room Type</center></th> ");
							wr(" <th><center>Total Sales</center></th> ");
							wr(" </tr> ");
							wr(" </thead> ");
							wr(" <tbody> ");
							wr(" <tr> ");
							wr(" <td style='color: red;'>No data available in table</td>");
							wr(" <td></td>");
							wr(" <td></td>");
							wr(" </tr> ");
							wr(" </tbody> ");
							wr(" </table> ");
							wr("No data available in table");
							wr("<br>");
						}
						else
						{
							wr(" <table id = 'tblCheckOut' name = 'tblCheckOut' class = 'table table-bordered table-striped' style = 'font-size: 13px;'> ");
							wr(" <thead> ");
							wr(" <tr> ");
							wr(" <th><center>Room Type</center></th> ");
							wr(" <th><center>Total Sales</center></th> ");
							wr(" </tr> ");
							wr(" </thead> ");
							wr(" <tbody> ");
							foreach($RESE as $RESE)
							{
								wr(" <tr> ");
								wr(" <td style='text-align: center';>$RESE[0]</td> ");
								wr(" <td style='text-align: center';>$RESE[1]</td> ");
							// wr(" <td>$rs[4]</td> ");
								wr(" </tr> ");
							}
							wr(" </tbody> ");
							wr(" </table> ");
						}
						DBClose();
						?>
					</div>
					<br>
					<br>
					<!--Modal footer-->
					<div class="modal-footer">
						<button data-dismiss="modal" class="btn btn-default" type="button">No</button>
						<input type="submit" id="btnYes" name="btnYes" class="btn btn-danger" value="Yes">
					</div>
				</div>
			</div>
		</div>
	</form>
	<!-- available MODAL -->
	<form method="POST">
		<div class="modal fade" id="ModalRoomAvailable" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">

					<!--Modal header-->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
						<h4 class="modal-title">Available Room for Today</h4>
					</div>

					<!--Modal body-->
					<div class="modal-body">
						<?php
						// DBOpen();

						// $CRAT2 = DBGetData(" SELECT COUNT(*) as count from roominformation where roomno NOT IN (SELECT roomno from reservedate where checkin between '$maniladate' AND '$maniladate' or Checkout between '$maniladate' and '$maniladate') AND roomavailability = 'Available' GROUP BY RoomID ");
						// var_dump($CRAT2[0][0]);
						// if(empty($RAT2))
						// {
						// 	wr(" <table id = 'tblMembership' name = 'tblMembership' class = 'table table-bordered table-striped' style = 'font-size: 13px;'> ");
						// 	wr(" <thead> ");
						// 	wr("  <tr> ");
						// 	wr(" <th><center>Room ID</center></th> ");
						// 	wr(" <th><center>Room Type</center></th> ");
						// 	wr(" <th><center>Room Available</center></th> ");
						// 	wr(" </tr> ");
						// 	wr(" </thead> ");
						// 	wr(" <tbody> ");
						// 	wr(" <tr> ");
						// 	wr(" <td style='color: red;'>No data available in table</td>");
						// 	wr(" <td></td>");
						// 	wr(" <td></td>");
						// 	wr(" </tr> ");
						// 	wr(" </tbody> ");
						// 	wr(" </table> ");
						// 	wr("No data available in table");
						// 	wr("<br>");
						// }
						// else
						// {
						// 	wr(" <table id = 'tblMembership' name = 'tblMembership' class = 'table table-bordered table-striped' style = 'font-size: 13px;'> ");
						// 	wr(" <thead> ");
						// 	wr(" <tr> ");
						// 	wr(" <th><center>Room ID</center></th> ");
						// 	wr(" <th><center>Room Type</center></th> ");
						// 	wr(" <th><center>Room Available</center></th> ");
						// 	wr(" </tr> ");
						// 	wr(" </thead> ");
						// 	wr(" <tbody> ");
						// 	foreach($RAT2 as $RAT2)
						// 	{
						// 		wr(" <tr> ");
						// 		wr(" <td style='text-align: center';>$RAT2[1]</td> ");
						// 		wr(" <td style='text-align: center';>$RAT2[4]</td> ");
						// 		wr(" <td style='text-align: center';>".$CRAT2[0]."</td> ");
						// 		wr(" </tr> ");
						// 	}
						// 	wr(" </tbody> ");
						// 	wr(" </table> ");
						// 	wr(" <span>".$CRAT2[0][0]."</span> ");
						// }
						// DBClose();
						?>
					</div>
					<br>
					<br>
					<!--Modal footer-->
					<div class="modal-footer">
						<button data-dismiss="modal" class="btn btn-default" type="button">No</button>
						<input type="submit" id="btnYes" name="btnYes" class="btn btn-danger" value="Yes">
					</div>
				</div>
			</div>
		</div>
	</form>
	<form id="formcheckin" name="formcheckin" method="POST" action="Function/checkin.php" >
		<div class="modal fade" id="CheckinModal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true" data-backdrop="static">
			<div class="modal-dialog">
				<div class="modal-content">

					<!--Modal header-->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
						<h4 class="modal-title">Check-in</h4>
					</div>
					<!--Modal body-->
					<div class="modal-body">
						<input type="text" id="lblresid" name="lblresid">
						<center><h1>Are you sure you want to check-in this guest? </h1></center>
						<center>Reservation Balance: <label id="lblbalance"></label></center>
						<center ><label id="lblenter">Enter Amount</label></center>
						<center><input type="number" id="txtbalance" name="txtbalance" style="font-size: 20px" required=""></center>
					</div>
					<br>
					<br>
					<!--Modal footer-->
					<div class="modal-footer">
						<button id="btnNo" data-dismiss="modal" class="btn btn-default" type="button">No</button>
						<button id="btncheckinyes" name="btncheckinyes" class="btn btn-primary">Yes</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<form method="POST" action="Function/CheckOUT.php">
		<div class="modal fade" id="CheckoutModal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">

					<!--Modal header-->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
						<h4 class="modal-title">Check-out</h4>
					</div>
					<!--Modal body-->
					<div class="modal-body">
						<input type="hidden" id="lblresidout" name="lblresidout">
						<center><h1>Are you sure you want to check-out this guest? </h1></center>
					</div>
					<br>
					<br>
					<!--Modal footer-->
					<div class="modal-footer">
						<button data-dismiss="modal" class="btn btn-default" type="button">No</button>
						<button class="btn btn-primary">Yes</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<script type="text/javascript">

		var btnCheckOUT = document.getElementById('btnCheckOUT');
		btnCheckOUT.onclick = function()
		{
			if(ctr_ID == null)
			{
				$.niftyNoty
				({
					type: 'danger',
					title: 'Invalid Action',
					message: 'Please Select Reservation Details!',
					container: 'floating',
					timer: 1000,
				});
			}
			else
			{
				$.ajax(
				{
					type: "POST",
					url: "Function/GetCheckOUT.php",
					data:
					{
						ctr_ID: ctr_ID
					},
					success: function(response)
					{
						var rs = JSON.parse(response);
						$('#CheckoutModal').modal('show');
						document.getElementById('lblresidout').value = rs[0][22];
					}
				});
			}
		}
	</script>
	<script type="text/javascript">
		var btnCheckIN = document.getElementById('btnCheckIN');
		btnCheckIN.onclick = function()
		{
			if(ctr_ID == null)
			{
				$.niftyNoty
				({
					type: 'danger',
					title: 'Invalid Action',
					message: 'Please Select Reservation Details!',
					container: 'floating',
					timer: 1000,
				});
			}
			else
			{
				$.ajax(
				{
					type: "POST",
					url: "Function/GetCheckIN.php",
					data:
					{
						ctr_ID: ctr_ID
					},
					success: function(response)
					{
						var ci = JSON.parse(response);
						$('#CheckinModal').modal('show');
						document.getElementById('lblresid').value = ci[0][22];
						document.getElementById('lblbalance').innerHTML = ci[0][18];
						if(ci[0][18] == "0")
						{
							document.getElementById('txtbalance').value = '0';
							document.getElementById('txtbalance').style.display = "none";
							document.getElementById('lblenter').style.display = "none";
						}
					}
				});
			}
		}
	</script>
	<script type="text/javascript">
		var ctr;
		var ctr_ID;
		var table = $('#tblMembership').DataTable({

			"responsive": true,
			"language": {
				"paginate": {
					"previous": '<i class="demo-psi-arrow-left"></i>',
					"next": '<i class="demo-psi-arrow-right"></i>'
				}
			}

		});
    // Order by the grouping
    $('#tblMembership').on('click', 'tr', function() {
    	var rowtable = $('#tblMembership').DataTable();
    	if($(this).hasClass('row_selected'))
    	{
    		$(this).removeClass('row_selected');
    		ctr_ID = null;
    	}
    	else
    	{
    		table.$('tr.row_selected').removeClass('row_selected');
    		$(this).addClass('row_selected');
    		ctr = rowtable.row(this).data();
    		ctr_ID = ctr[0];
    	}
    });
</script>
<script type="text/javascript">
	var ctr;
	var ctr_ID;
	var table = $('#tblCheckOut').DataTable({

		"responsive": true,
		"language": {
			"paginate": {
				"previous": '<i class="demo-psi-arrow-left"></i>',
				"next": '<i class="demo-psi-arrow-right"></i>'
			}
		}

	});
    // Order by the grouping
    $('#tblCheckOut').on('click', 'tr', function() {
    	var rowtable = $('#tblCheckOut').DataTable();
    	if($(this).hasClass('row_selected'))
    	{
    		$(this).removeClass('row_selected');
    		ctr_ID = null;
    	}
    	else
    	{
    		table.$('tr.row_selected').removeClass('row_selected');
    		$(this).addClass('row_selected');
    		ctr = rowtable.row(this).data();
    		ctr_ID = ctr[0];
    	}
    });
</script>
<script type="text/javascript">
	var SuccessReturn = '<?php echo $_POST['msg'] ?>';
	if(SuccessReturn)
	{
		$.niftyNoty
		({
			type: 'success',
			title: '',
			message: SuccessReturn,
			container: 'floating',
			timer: 3000,
		});
	}
</script>
<script type="text/javascript">
	document.getElementById("PendingReservation").onclick = function () {
		location.href = "Reservations.php";
	};
</script>
<script type="text/javascript">
	document.getElementById('AvailableRooms').onclick = function()
	// {
	// 	$('#ModalRoomAvailable').modal('show');
	// }
	document.getElementById('TodaySales').onclick = function()
	{
		$('#ModalTotalSales').modal('show');
	}
	document.getElementById('TodayReserved').onclick = function()
	{
		$('#ModalTodayReserved').modal('show');
	}
</script>
<?php include "incFoot.php" ?>