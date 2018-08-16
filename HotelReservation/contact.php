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
			<h1 class="page-header text-overflow">Update Contact</h1>
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
					<span>Contact Information</span>
				</span>
			</div>
			<div class="panel-body">
				<?php

				DBOpen();

				$rs = DBGetData("SELECT * from contact");
				if(empty($rs))
				{
					wr(" <table id = 'tblMembership' name = 'tblMembership' class = 'table table-bordered table-striped' style = 'font-size: 13px;'> ");
					wr(" <thead> ");
					wr("  <tr> ");
					wr(" <th><center>Floor ID.</center></th> ");
					wr(" <th><center>Floors</center></th> ");
					wr(" </tr> ");
					wr(" </thead> ");
					wr(" <tbody> ");
					wr(" <tr> ");
					wr(" <td style='color: red;'>No data available in table</td>");
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
					wr(" <th><center>ID</center></th> ");
					wr(" <th><center>Address</center></th> ");
					wr(" <th><center>Tel No.</center></th> ");
					wr(" <th><center>Mobile No.</center></th> ");
					wr(" </tr> ");
					wr(" </thead> ");
					wr(" <tbody> ");
					foreach($rs as $rs)
					{
						wr(" <tr> ");
						wr(" <td style='text-align: center';>$rs[0]</td> ");
						wr(" <td style='text-align: center';>$rs[1]</td> ");
						wr(" <td style='text-align: center';>$rs[2]</td> ");
						wr(" <td style='text-align: center';>$rs[3]</td> ");
							// wr(" <td>$rs[4]</td> ");
						wr(" </tr> ");
					}
					wr(" </tbody> ");
					wr(" </table> ");
				}
				DBClose();
				wrBtn("button","btnUpdateAmenities","Update Contact","col-sm-2 Right MR","orange");
				?>
			</div>
		</div>
	</div>
</div>
<!--Update Item Modal-->
<form method="POST" action="Function/Function-UpdateContact.php" enctype="multipart/form-data">
	<div class="modal fade" id="UpdateAccountModal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<!--Modal header-->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
					<h4 class="modal-title">Update Amenities</h4>
				</div>
				<!--Modal body-->
				<div class="modal-body">
					<div class="row">
						<?php
						wrInput('text','txtRowID','ID','col-lg-6');
						wrInput('text','txtUpdateContactAddress','TITLE','col-lg-6');
						?>
					</div>
					<br>
					<div class="row">
						<?php
						wrInput('text','txtUpdateContactTelNo','Tel No.','col-lg-6');
						wrInput('text','txtUpdateContactMobileNo','Mobile No.','col-lg-6');
						?>
					</div>
				</div>
				<br>
				<br>
				<!--Modal footer-->
				<div class="modal-footer">
					<button data-dismiss="modal" class="btn btn-default" type="button">No</button>
					<input type="submit" id="btnYes" name="btnYes" class="btn btn-primary" value="Yes">
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
<!-- ------------UPDATE ITEM MODAL SCRIPT---------------------- -->
<script type="text/javascript">
	
	var btnUpdateAmenities = document.getElementById('btnUpdateAmenities');
	btnUpdateAmenities.onclick = function()
	{
		if(ctr_ID == null)
		{
			$.niftyNoty
			({
				type: 'danger',
				title: 'Invalid Action',
				message: 'Select Amenities you want to update!',
				container: 'floating',
				timer: 3000,
			});
		}
		else
		{
			$.ajax(
			{
				type: "POST",
				url: "Function/GetUpdateContact.php",
				data:
				{
					ctr_ID: ctr_ID
				},
				success: function(response)
				{
					var res = JSON.parse(response);
					$('#UpdateAccountModal').modal('show');
					document.getElementById("txtRowID").value = res[0][0];
					document.getElementById('txtUpdateContactAddress').value = res[0][1];
					document.getElementById('txtUpdateContactTelNo').value = res[0][2];
					document.getElementById('txtUpdateContactMobileNo').value = res[0][2];
				}
			});
		}
	}
</script>
<?php include "incFoot.php" ?>