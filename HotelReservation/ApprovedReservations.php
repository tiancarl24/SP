<?php 
include "incSecure.php";
include "incHeader.php";
include "incSidenav.php";
include "utils.php";
?>
<div class="boxed">

	<!--CONTENT CONTAINER-->
	<!--===================================================-->
	<div id="content-container">

		<!--Page Title-->
		<div id="page-title">
			<h1 class="page-header text-overflow">Approved Reservations</h1>
		</div>
		<div class="modal fade" id="ViewMemberModal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="row">
						<div>
							<div class="panel-body text-center">
								<div id="ImgPrimary">
								</div>
								<p id="GetIDViewMember" class="text-muted"></p>
								<p id="getFullname" class="text-lg text-semibold mar-no text-main"></p>
								<p id="getOccupation" class="text-muted"></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Basic Data Tables -->
		<!--===================================================-->
		<div class="panel">
			<div class="panel-heading">
				<br>
				<span class="panel-title">
					<span>Rooms list</span>
					<?php wrBtn("hidden","btnViewItem","View Room Details","col-sm-2 Right MR","greensuccess"); ?>
				</span>
			</div>
			<div class="panel-body">
				<?php

				DBOpen();

				$rs = DBGetData("SELECT * from reservations WHERE Status = 'Approved'");
				if(empty($rs))
				{
					wr(" <table id = 'tblMembership' name = 'tblMembership' class = 'table table-bordered table-striped' style = 'font-size: 13px;'> ");
					wr(" <thead> ");
					wr(" <tr> ");
					wr(" <th><center>Reservation NO</center></th> ");
					wr(" <th><center>Room No</center></th> ");
					wr(" <th><center>Room Type</center></th> ");
					wr(" <th><center>Name</center></th> ");
					wr(" <th><center>Status</center></th> ");
					wr(" </tr> ");
					wr(" </thead> ");
					wr(" <tbody> ");
					wr(" <tr> ");
					wr(" <td style='color: red;'>No data available in table</td>");
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
					wr(" <table id = 'tblMembership' name = 'tblMembership' class = 'table table-bordered table-striped' style = 'font-size: 13px;'> ");
					wr(" <thead> ");
					wr(" <tr> ");
					wr(" <th><center>Reservation NO</center></th> ");
					wr(" <th><center>Room No</center></th> ");
					wr(" <th><center>Room Type</center></th> ");
					wr(" <th><center>Name</center></th> ");
					wr(" <th><center>Status</center></th> ");
					wr(" </tr> ");
					wr(" </thead> ");
					wr(" <tbody> ");
					foreach($rs as $rs)
					{
						wr(" <tr> ");
						wr(" <td style='text-align: center';>$rs[22]</td> ");
						wr(" <td style='text-align: center';>$rs[14]</td> ");
						wr(" <td style='text-align: center';>$rs[13]</td> ");
						wr(" <td style='text-align: center';>$rs[1] $rs[2]</td> ");
						wr(" <td style='text-align: center';>$rs[19]</td> ");
							// wr(" <td>$rs[4]</td> ");
						wr(" </tr> ");
					}
					wr(" </tbody> ");
					wr(" </table> ");
				}
				wrBtn("button","bntView","View","col-sm-2 Right","blue");
				wrBtn("button","btnCheckIN","Check in","col-sm-2 Right","greensuccess");
				DBClose();
				?>
			</div>
		</div>
	</div>
</div>
</div>
<!-- ------------ -->
<form method="POST" action="Function/Function-DisapproveReservation.php">
	<div class="modal fade" id="ViewResModal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">

				<!--Modal header-->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
					<h4 class="modal-title">View Reservation</h4>
				</div>
				<!--Modal body-->
				<div class="modal-body">
					<div class="row">
						<?php
						wrInputRO('text','lblIDView','Room ID','col-lg-4');
						wrInputRO('text','txtReservationDate','Reservation Date','col-lg-4 Right');
						?>
					</div>
					<br>
					<div class="row">
						<?php
						wrInputRO('text','txtFullname','Fullname','col-lg-4');
						wrInputRO('text','txtContactNo','Contact No.','col-lg-4');
						wrInputRO('text','txtAddress','Address','col-lg-4');
						?>
					</div>
					<div class="row">
						<?php
						wrInputRO('text','txtAdult','Adult','col-lg-2');
						wrInputRO('text','txtChild','Child','col-lg-2');
						wrInputRO('text','txtDays','Days','col-lg-2');
						wrInputRO('text','txtCheckIn','Check In','col-lg-3');
						wrInputRO('text','txtCheckOut','CheckOut','col-lg-3');
						?>
					</div>
					<div class="row">
						<?php
						wrInputRO('text','txtTotalAmount','Total Amount','col-lg-4 Right');
						wrInputRO('text','txtDownpayment','Downpayment','col-lg-4 Right');
						?>
					</div>
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
					<input type="hidden" id="lblresid" name="lblresid">
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
<!-- ------------ -->
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
	var bntView = document.getElementById('bntView');
	bntView.onclick = function()
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
				url: "Function/GetIDViewRes.php",
				data:
				{
					ctr_ID: ctr_ID
				},

				success: function(response)
				{
					var res = JSON.parse(response);
					$('#ViewResModal').modal('show');
					document.getElementById('lblIDView').value = res[0][22];
					document.getElementById('txtReservationDate').value = res[0][8];
					document.getElementById('txtFullname').value = res[0][1] + ' ' + res[0][2];
					document.getElementById('txtContactNo').value = res[0][3];
					document.getElementById('txtAddress').value = res[0][4];
					document.getElementById('txtAdult').value = res[0][5];
					document.getElementById('txtChild').value = res[0][6];
					document.getElementById('txtDays').value = res[0][7];
					document.getElementById('txtCheckIn').value = res[0][9];
					document.getElementById('txtCheckOut').value = res[0][10];
					document.getElementById('txtTotalAmount').value = res[0][17];
					document.getElementById('txtDownpayment').value = res[0][16];
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
					var rs = JSON.parse(response);
					
					$('#CheckinModal').modal('show');
					document.getElementById('lblresid').value = rs[0][22];
					document.getElementById('lblbalance').innerHTML = rs[0][18];
					if(rs[0][18] == "0")
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
	
	var btncheckinyes = document.getElementById('btncheckinyes')
	btncheckinyes.onclick = function()
	{
		if(txtbalance.value !== lblbalance.innerHTML)
		{
			txtbalance.value = "";
			alert('Invalid Amount');
			
		}
	}
</script>
<script type="text/javascript">

	var btnNo = document.getElementById('btnNo');
	btnNo.onclick = function()
	{
		window.location.reload();
	}
</script>
<?php include "incFoot.php" ?>