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
			<h1 class="page-header text-overflow">Reports</h1>
		</div>
		<!-- Basic Data Tables -->
		<!--===================================================-->
		<div class="panel">
			<div class="panel-heading">
				<br>
				FROM:<input type="date" id="dtFrom" name="dtFrom">
				TO:<input type="date" id="dtTo" name="dtTo">
				STATUS:
				<select id="cboStatus" name="cboStatus">
					<option></option>
					<option>Approved</option>
					<option>Disapproved</option>
					<option>Pending</option>
				</select>
				<?php 
				wrBtn("button","btnFilter","Filter","col-sm-2 Right MR","orange"); 
				?>
			</div>
			<div class="panel-body">
				<?php
				
				wr(" <table id = 'tblMembership' name = 'tblMembership' class = 'table table-bordered table-striped' style = 'font-size: 13px;'> ");
				wr(" <thead> ");
				wr("  <tr> ");
				wr(" <th><center>Room No</center></th> ");
				wr(" <th><center>Room Type</center></th> ");
				wr(" <th><center>Mode of Payment</center></th> ");
				wr(" <th><center>Down Payment</center></th> ");
				wr(" <th><center>Total Amount</center></th> ");
				wr(" <th><center>Balance</center></th> ");
				wr(" <th><center>Total Paid</center></th> ");
				wr(" </tr> ");
				wr(" </thead> ");
				wr(" <tbody> ");
				wr(" </tbody> ");
				wr(" </table> ");
				?>
			</div>
		</div>
	</div>
</div>

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
	
	var btnFilter = document.getElementById('btnFilter');
	btnFilter.onclick = function()
	{
		if(dtFrom.value == "" || dtTo.value == "" || cboStatus.value == "")
		{
			$.niftyNoty
			({
				type: 'danger',
				title: 'Invalid Action',
				message: 'Please provide all data needed',
				container: 'floating',
				timer: 3000,
			});
		}
		else
		{
			$.ajax(
			{
				type: "POST",
				url: "Function/FilterReport.php",
				data:
				{
					FROM: dtFrom.value,
					TO: dtTo.value,
					STATUS: cboStatus.value,
				},
				success: function(response)
				{
					//alert(response);
					var result = JSON.parse(response);
					var t = $('#tblMembership').DataTable();

					t.clear().draw();
					$.each(result,function(i,index)
					{
						t.row.add([
							index.RoomNo,
							index.RoomType,
							index.ModeOfPayment,
							index.DownPayment,
							index.TotalAmount,
							index.Balance,
							index.TotalPaid,
							]).draw();
					});
				}
			});
		}
	}
</script>

<!-- ------------UPDATE ITEM MODAL SCRIPT---------------------- -->
<?php include "incFoot.php" ?>