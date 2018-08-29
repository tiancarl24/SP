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
				wrBtn("button","btnCheckOUT","Check out","col-sm-2 Right","greensuccess");
				DBClose();
				?>
			</div>
		</div>
	</div>
</div>
</div>