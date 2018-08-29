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
			<h1 class="page-header text-overflow">Check-in</h1>
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

				$rs = DBGetData("SELECT * from reservations WHERE checkinstatus = 'checkin'");
				
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
				wrBtn("button","btnCheckOUT","Check out","col-sm-2 Right","greensuccess");
				DBClose();
				?>
			</div>
		</div>
	</div>
</div>
</div>
<!-- ------------ -->

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
					<input type="hidden" id="lblresid" name="lblresid">
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

<!-- ------------ -->
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
					document.getElementById('lblresid').value = rs[0][22];
				}
			});
		}
	}
</script>
<?php include "incFoot.php" ?>