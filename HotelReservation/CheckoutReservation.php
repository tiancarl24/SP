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
			<h1 class="page-header text-overflow">Check-out</h1>
		</div>
		<!-- Basic Data Tables -->
		<!--===================================================-->
		<div class="panel">
			<div class="panel-heading">
				<br>
				<span class="panel-title">
					<span>Guest list</span>
					<?php wrBtn("hidden","btnViewItem","View Room Details","col-sm-2 Right MR","greensuccess"); ?>
				</span>
			</div>
			<div class="panel-body">
				<?php

				DBOpen();

				$rs = DBGetData("SELECT * from reservations WHERE checkinstatus = 'checkout'");
				
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
				wrBtn("button","bntView","View","col-sm-2 Right","blue");
				DBClose();
				?>
			</div>
		</div>
	</div>
</div>
</div>

<form>
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
					
				</div>
			</div>
		</div>
	</div>
</form>

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