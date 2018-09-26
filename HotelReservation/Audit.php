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
			<h1 class="page-header text-overflow">Audit Trail</h1>
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
					<span>Audit Trail</span>
				</span>
			</div>
			<div class="panel-body">
				<?php

				DBOpen();

				$rs = DBGetData("SELECT * from audit ORDER BY RowID DESC");
				DBClose();
				wr(" <table id = 'tblMembership' name = 'tblMembership' class = 'table table-bordered table-striped' style = 'font-size: 13px;'> ");
				wr(" <thead> ");
				wr(" <tr> ");
				wr(" <th><center>ID</center></th> ");
				wr(" <th><center>Name</center></th> ");
				wr(" <th><center>Action</center></th> ");
				wr(" <th><center>Date / Time</center></th> ");
				wr(" </tr> ");
				wr(" </thead> ");
				wr(" <tbody> ");
				foreach($rs as $rs)
				{
					wr(" <tr> ");
					wr(" <td style='text-align: center';>$rs[0]</td> ");
					wr(" <td style='text-align: center';>$rs[1]</td> ");
					wr(" <td style='text-align: center';>$rs[2]</td> ");
					wr(" <td style='text-align: center';>$rs[3] / $rs[4] </td> ");
							// wr(" <td>$rs[4]</td> ");
					wr(" </tr> ");
				}
				wr(" </tbody> ");
				wr(" </table> ");
				
				?>
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


<?php include "incFoot.php" ?>