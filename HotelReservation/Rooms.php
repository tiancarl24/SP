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
			<h1 class="page-header text-overflow">Rooms</h1>
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
				</span>
			</div>
			<div class="panel-body">
				<?php

				DBOpen();

				$rs = DBGetData("SELECT * from roominformation where roomavailability = 'available' GROUP BY roomid ");
				if(empty($rs))
				{
					wr(" <table id = 'tblMembership' name = 'tblMembership' class = 'table table-bordered table-striped' style = 'font-size: 13px;'> ");
					wr(" <thead> ");
					wr(" <tr> ");
					wr(" <th><center>Item No.</center></th> ");
					wr(" <th><center>Item Name</center></th> ");
					wr(" <th><center>Room Availability</center></th> ");
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
					wr(" <table id = 'tblMembership' name = 'tblMembership' class = 'table table-bordered table-striped' style = 'font-size: 13px;'> ");
					wr(" <thead> ");
					wr(" <tr> ");
					wr(" <th><center>Room ID.</center></th> ");
					wr(" <th><center>Room No.</center></th> ");
					wr(" <th><center>Room Name</center></th> ");
					wr(" <th><center>Room Availability</center></th> ");
					wr(" </tr> ");
					wr(" </thead> ");
					wr(" <tbody> ");
					foreach($rs as $rs)
					{
						wr(" <tr> ");
						wr(" <td style='text-align: center';>$rs[1]</td> ");
						wr(" <td style='text-align: center';>$rs[2]</td> ");
						wr(" <td style='text-align: center';>$rs[3]</td> ");
						wr(" <td style='text-align: center';>$rs[7]</td> ");
							// wr(" <td>$rs[4]</td> ");
						wr(" </tr> ");
					}
					wr(" </tbody> ");
					wr(" </table> ");
				}
				DBClose();
				wrBtn("button","btnNewRoom","Add New Room","col-sm-2 Right","bluegreen");
				wrBtn("button","btnUpdateRoom","Update Room","col-sm-2 Right MR","orange");
				wrBtn("button","btnDeleteRoom","Discard Room","col-sm-2 Right MR","red");
				?>
			</div>
		</div>
	</div>
</div>
</div>
<!--Add new Item Modal-->
<form method="POST" action="Function/Function-AddRoom.php" enctype="multipart/form-data">
	<div class="modal fade" id="NewRoomModal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<!--Modal header-->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
					<h4 class="modal-title">Insert New Item</h4>
				</div>
				<!--Modal body-->
				<div class="modal-body">
					<div class="row">
						<?php
						wrInput('text','txtRoomID','Room ID','col-lg-4');
						wrInput('text','txtRoomNo','Room No','col-lg-4');
						wrInput('file','image','Upload image','col-lg-4 Righttxt');
						?>
					</div>
					<br>
					<div class="row">
						<?php
						wrInput('text','txtRoomName','Room Name','col-lg-4');
						wrInput('text','txtRoomType','Room Type','col-lg-4');
						wrInput('number','txtRoomPrice','Room Price','col-lg-4');
						?>
					</div>
					<br>
					<div class="row">
						<?php wrTextArea('txtRoomDescription','Room Description','col-lg-12') ?>
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
<!-- Update Room MODAL -->
<form method="POST" action="Function/Function-UpdateRoom.php">
	<div class="modal fade" id="UpdateRoomModal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">

				<!--Modal header-->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
					<h4 class="modal-title">Update Room</h4>
				</div>
				<!--Modal body-->
				<div class="modal-body">
					<div class="row">
						<?php
						wrInput('text','UpdateRoomID','Room ID','col-lg-4');
						?>
					</div>
					<br>
					<div class="row">
						<?php
						wrInput('text','UpdateRoomName','Room Name','col-lg-4');
						wrInput('text','UpdateRoomType','Room Type','col-lg-4');
						wrInput('number','UpdateRoomPrice','Room Price','col-lg-4');
						?>
					</div>
					<br>
					<div class="row">
						<?php wrTextArea('UpdateRoomDescription','Room Description','col-lg-12') ?>
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
<!-- ------------ -->
<!-- Update Room MODAL -->
<form method="POST" action="Function/Function-DeleteRoom.php">
	<div class="modal fade" id="DeleteRoomModal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">

				<!--Modal header-->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
					<h4 class="modal-title">Delete Room</h4>
				</div>
				<!--Modal body-->
				<div class="modal-body">
					<center><h1>Are you sure you want to delete </h1></center>
					<div class="row">
						<?php
						wrInput('hidden','GetRoomID','','col-lg-4');
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
	var btnNewRoom = document.getElementById('btnNewRoom');
	btnNewRoom.onclick = function()
	{
		$('#NewRoomModal').modal('show');
	}
</script>
<script type="text/javascript">
	var btnUpdateRoom = document.getElementById('btnUpdateRoom');
	btnUpdateRoom.onclick = function()
	{
		if (ctr_ID == null) 
		{
			$.niftyNoty
			({
				type: 'danger',
				title: 'Invalid Action',
				message: 'Please select room to Delete!',
				container: 'floating',
				timer: 1000,
			});
		}
		else
		{
			$.ajax(
			{
				type: "POST",
				url: "Function/GetIDRoomUpdate.php",
				cache: false,
				data:
				{
					ctr_ID: ctr_ID
				},
				success: function(response)
				{
					var result = JSON .parse(response);
					$('#UpdateRoomModal').modal('show');
					document.getElementById('UpdateRoomID').value = result[0][1];
					document.getElementById('UpdateRoomName').value = result[0][3];
					document.getElementById('UpdateRoomType').value = result[0][4];
					document.getElementById('UpdateRoomPrice').value = result[0][6];
					document.getElementById('UpdateRoomDescription').value = result[0][5];
				},
			});
		}
	}
</script>
<script type="text/javascript">
	var btnDeleteRoom = document.getElementById('btnDeleteRoom');
	btnDeleteRoom.onclick = function()
	{
		if (ctr_ID == null) 
		{
			$.niftyNoty
			({
				type: 'danger',
				title: 'Invalid Action',
				message: 'Please select room to edit!',
				container: 'floating',
				timer: 1000,
			});
		}
		else
		{
			
			$.ajax(
			{
				type: "POST",
				url: "Function/GetIDRoomUpdate.php",
				cache: false,
				data:
				{
					ctr_ID: ctr_ID
				},
				success: function(response)
				{
					var result = JSON .parse(response);
					$('#DeleteRoomModal').modal('show');
					document.getElementById('GetRoomID').value = result[0][1];
				},
			});
		}
	}
</script>
<?php include "incFoot.php" ?>