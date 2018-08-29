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
				FILTER:
				<select id="cboFilter" name="cboFilter">
					<option></option>
					<option>Daily</option>
					<option>Weekly</option>
					<option>Monthly</option>
					<option>Yearly</option>
				</select>
				<select id="cboMonth" name="cboMonth" style="display: none;">
					<option></option>
					<option value="01">January</option>
					<option value="02">February</option>
					<option value="03">March</option>
					<option value="04">April</option>
					<option value="05">May</option>
					<option value="06">June</option>
					<option value="07">July</option>
					<option value="08">August</option>
					<option value="09">September</option>
					<option value="10">October</option>
					<option value="11">November</option>
					<option value="12">December</option>
				</select>
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

<script type="text/javascript">
	
	var cboFilter = document.getElementById('cboFilter');
	cboFilter.onchange = function()
	{
		if(cboFilter.value == 'Daily')
		{
			var today = new Date();
			var dd = today.getDate();
			var mm = today.getMonth()+1; //January is 0!
			var yyyy = today.getFullYear();

			if(dd<10) 
			{
				dd = '0'+dd
			} 

			if(mm<10) 
			{
				mm = '0'+mm
			} 

			today = yyyy + '-' + mm + '-' + dd;
			document.getElementById('dtFrom').value = today;
			document.getElementById('dtTo').value = today;
		}
		else if(cboFilter.value == 'Weekly')
		{
			var today = new Date();
			var dd = today.getDate();
			var mm = today.getMonth()+1; //January is 0!
			var yyyy = today.getFullYear();

			if(dd<10) 
			{
				dd = '0'+7+ dd
			} 

			if(mm<10) 
			{
				mm = '0'+mm
			} 

			today = yyyy + '-' + mm + '-' + dd;
			document.getElementById('dtFrom').value = today;
			document.getElementById('dtTo').value = today;
		}
		else if(cboFilter.value == 'Monthly')
		{
			cboMonth.style.display = 'block';
		}
	}
</script>

<script type="text/javascript">
	
	var cboMonth = document.getElementById('cboMonth');
	cboMonth.onchange = function()
	{
		var date = new Date();
		var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
		var lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0);
		alert(date);
	}
</script>

<!-- ------------UPDATE ITEM MODAL SCRIPT---------------------- -->
<?php include "incFoot.php" ?>