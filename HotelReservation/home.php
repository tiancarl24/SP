<?php 
include "incSecure.php";
include "incHeader.php";
include "incSidenav.php";
include 'utils.php';
?>
<div class="boxed">

	<!--CONTENT CONTAINER-->
	<!--===================================================-->
	<div id="content-container">

		<!--Page Title-->
		<div id="page-title">
			<h1 class="page-header text-overflow">Dashboard</h1>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="col-lg-3 col-md-3 col-sm-3">
				<div class="panel media pad-all bg-info" id="TreasuryMedia" style="cursor: pointer;">
					<div class="media-left">
						<span class="icon-wra icon-wap-sm bg-ifo">
							<i class="pli-coins icon-3x"></i>
						</span>
					</div>
					<div class="media-body">
						<?php 
						DBOpen();

						// $rs = DBGetData(" SELECT firstname FROM reservations WHERE checkoutdate = " .SQLs($maniladate));

						$rs = DBGetData("SELECT COUNT(*) from reservations WHERE checkoutdate = " .SQLs($maniladate));

						DBClose();
						 ?>
						<p class="text-2x mar-no text-semibold"><i class="fa fa-user"></i>&nbsp<span><?php echo $rs[0][0]; ?></span></p>
						<p class="mar-no">Guest Checkout today</p>
					</div>
				</div>
			</div>
		</div>
	</div>

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

	<?php include "incFoot.php" ?>