<?php 
include "incSecure.php";
include "incHeader.php";
include "incSidenav.php";
include "utils.php";
?>
<style type="text/css">
.print {
	display: none;
}

@media print {
	.screen {
		display: none;
	}
	.show2{
		border: none;
	}
	.print {
		display: inline-block;
	}
}
</style>
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
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<label class="screen">FILTER:</label>
						<select id="cboFilter" name="cboFilter" class="show2 form-control">
							<option></option>
							<option>Daily</option>
							<option>Monthly</option>
							<option>Quarterly</option>
							<option>Yearly</option>
						</select>
					</div>
					<div class="col-md-3">
						<label class="screen">Room Type:</label>
						<select id="cboRoomType" name="cboRoomType" class="screen form-control">
							<option></option>
							<option value="All">All</option>
							<?php
							DBOpen();
							$RT = DBGetData("SELECT DISTINCT RoomType FROM roominformation");
							foreach($RT as $RT)
							{
								wr("<option value='$RT[0]'>$RT[0]</option>");
							}
							DBClose();
							?>
						</select>
					</div>
					<br>
					<div class="col-md-3 col-sm-6">
						<label class="screen" style="display: none;">Quarter:</label>
						<select id="cboQuarter" name="cboQuarter" style="display: none;" class="screen form-control show2">
							<option></option>
							<option value="First">First Quarter</option>
							<option value="Second">Second Quarter</option>
							<option value="Third">Third Quarter</option>
							<option value="Fourth">Fourth Quarter</option>
						</select>
						<select id="cboMonth" name="cboMonth" style="display: none;" class="screen form-control show2">
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
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-3">
						<label class="screen">FROM:</label>
						<input type="date" id="dtFrom" name="dtFrom" class="screen form-control">
					</div>
					<div class="col-md-3">
						<label class="screen">TO:</label>
						<input type="date" id="dtTo" name="dtTo" class="screen form-control">
					</div>
					<div class="col-md-3">
						<label class="screen">STATUS:</label>
						<select id="cboStatus" name="cboStatus" class="screen form-control">
							<option></option>
							<option>Approved</option>
							<option>Disapproved</option>
							<option>Pending</option>
						</select>
					</div>
					<br>
					<?php 
					wrBtn("button","btnFilter","Filter","col-sm-2 Right MR screen","orange"); 
					?>
				</div>
				
			</div>
			<br>
			<br>
			<br>
			<br>
			<br>
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
				<div class="row">
					<a href="PrintSales.php" class="screen"><button class="col-sm-2 Right btn btn-warning screen" onclick="window.print()">Print</button></a>
				</div>
				<br>
				<div class="col-sm-2 pull-right">
					<label>TOTAL:</label>
					<input type="text" id="lbltotal" name="lbltotal" readonly>
				</div>
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
					RTYPE: cboRoomType.value
				},
				success: function(response)
				{
					//alert(response);
					//var result = JSON.parse(response);
					var t = $('#tblMembership').DataTable();

					t.clear().draw();
					$.each(response['query'],function(i,index)
					{
						t.row.add([
							index.RoomNo,
							index.RoomType,
							index.ModeOfPayment,
							index.DownPayment,
							index.TotalAmount,
							index.Balance,
							parseInt(index.TotalPaid).toLocaleString() + ".00",
							]).draw();
					});

					if(response["sum"] == null)
					{
						document.getElementById('lbltotal').value = "0.00";
					}
					else
					{
						document.getElementById('lbltotal').value = parseInt(response["sum"]).toLocaleString() + ".00";
					}
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
		else if(cboFilter.value == 'Monthly')
		{
			cboMonth.style.display = 'block';
			cboQuarter.style.display = 'none';
		}
		else if(cboFilter.value == 'Quarterly')
		{
			cboQuarter.style.display = 'block';
			cboMonth.style.display = 'none';
		}
		else if (cboFilter.value == "Yearly")
		{
			//var dateFormat = require('dateformat');

			cboMonth.style.display = 'none';
			var today = new Date();
			var Y = today.getFullYear();
			var firstday = new Date(new Date().getFullYear(), 0, 1).toLocaleDateString();
			var lastday = new Date(new Date().getFullYear(), 11, 31).toLocaleDateString();

			var a = firstday.split('/')[0];
			var b = firstday.split('/')[1];
			var c = firstday.split('/')[2];

			var x = lastday.split('/')[0];
			var y = lastday.split('/')[1];
			var z = lastday.split('/')[2];



			document.getElementById('dtFrom').value = c + '-' + "0" + a + '-' + "0" + b;

			document.getElementById('dtTo').value = z + '-' + x + '-' + y;
			document.getElementById('lbldate').value = z + '-' + x + '-' + y;			

		}
	}
</script>

<script type="text/javascript">
	
	var cboMonth = document.getElementById('cboMonth');
	cboMonth.onchange = function()
	{
		if(cboMonth.value == "01")
		{
			var today = new Date();
			var Y = today.getFullYear();

			document.getElementById('dtFrom').value = Y + "-" + cboMonth.value + "-01";
			document.getElementById('dtTo').value = Y + "-" + cboMonth.value + "-31";
		}

		if(cboMonth.value == "02")
		{
			var today = new Date();
			var Y = today.getFullYear();

			document.getElementById('dtFrom').value = Y + "-" + cboMonth.value + "-01";
			document.getElementById('dtTo').value = Y + "-" + cboMonth.value + "-28";
		}

		if(cboMonth.value == "03")
		{
			var today = new Date();
			var Y = today.getFullYear();

			document.getElementById('dtFrom').value = Y + "-" + cboMonth.value + "-01";
			document.getElementById('dtTo').value = Y + "-" + cboMonth.value + "-31";
		}

		if(cboMonth.value == "04")
		{
			var today = new Date();
			var Y = today.getFullYear();

			document.getElementById('dtFrom').value = Y + "-" + cboMonth.value + "-01";
			document.getElementById('dtTo').value = Y + "-" + cboMonth.value + "-30";
		}

		if(cboMonth.value == "05")
		{
			var today = new Date();
			var Y = today.getFullYear();

			document.getElementById('dtFrom').value = Y + "-" + cboMonth.value + "-01";
			document.getElementById('dtTo').value = Y + "-" + cboMonth.value + "-31";
		}

		if(cboMonth.value == "06")
		{
			var today = new Date();
			var Y = today.getFullYear();

			document.getElementById('dtFrom').value = Y + "-" + cboMonth.value + "-01";
			document.getElementById('dtTo').value = Y + "-" + cboMonth.value + "-30";
		}

		if(cboMonth.value == "07")
		{
			var today = new Date();
			var Y = today.getFullYear();

			document.getElementById('dtFrom').value = Y + "-" + cboMonth.value + "-01";
			document.getElementById('dtTo').value = Y + "-" + cboMonth.value + "-31";
		}

		if(cboMonth.value == "08")
		{
			var today = new Date();
			var Y = today.getFullYear();

			document.getElementById('dtFrom').value = Y + "-" + cboMonth.value + "-01";
			document.getElementById('dtTo').value = Y + "-" + cboMonth.value + "-31";
		}

		if(cboMonth.value == "09")
		{
			var today = new Date();
			var Y = today.getFullYear();

			document.getElementById('dtFrom').value = Y + "-" + cboMonth.value + "-01";
			document.getElementById('dtTo').value = Y + "-" + cboMonth.value + "-30";
		}

		if(cboMonth.value == "10")
		{
			var today = new Date();
			var Y = today.getFullYear();

			document.getElementById('dtFrom').value = Y + "-" + cboMonth.value + "-01";
			document.getElementById('dtTo').value = Y + "-" + cboMonth.value + "-31";
		}

		if(cboMonth.value == "11")
		{
			var today = new Date();
			var Y = today.getFullYear();

			document.getElementById('dtFrom').value = Y + "-" + cboMonth.value + "-01";
			document.getElementById('dtTo').value = Y + "-" + cboMonth.value + "-30";
		}

		if(cboMonth.value == "12")
		{
			var today = new Date();
			var Y = today.getFullYear();

			document.getElementById('dtFrom').value = Y + "-" + cboMonth.value + "-01";
			document.getElementById('dtTo').value = Y + "-" + cboMonth.value + "-31";
		}


	}
</script>

<script type="text/javascript">
	
	var cboQuarter = document.getElementById('cboQuarter');
	cboQuarter.onchange = function()
	{
		if(cboQuarter.value == 'First')
		{
			var today = new Date();
			var Y = today.getFullYear();

			document.getElementById('dtFrom').value = Y + "-01" + "-01";
			document.getElementById('dtTo').value = Y + "-03" + "-31";
		}
		else if(cboQuarter.value == 'Second')
		{
			var today = new Date();
			var Y = today.getFullYear();

			document.getElementById('dtFrom').value = Y + "-04" + "-01";
			document.getElementById('dtTo').value = Y + "-06" + "-30";
		}
		else if(cboQuarter.value == 'Third')
		{
			var today = new Date();
			var Y = today.getFullYear();

			document.getElementById('dtFrom').value = Y + "-07" + "-01";
			document.getElementById('dtTo').value = Y + "-09" + "-30";
		}
		else
		{
			var today = new Date();
			var Y = today.getFullYear();

			document.getElementById('dtFrom').value = Y + "-10" + "-01";
			document.getElementById('dtTo').value = Y + "-12" + "-31";
		}
	}
</script>
<!-- ------------UPDATE ITEM MODAL SCRIPT---------------------- -->
<?php include "incFoot.php" ?>