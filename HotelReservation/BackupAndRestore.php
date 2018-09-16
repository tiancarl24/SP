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
			<h1 class="page-header text-overflow">Backup And Restore</h1>
		</div>
		<!-- Basic Data Tables -->
		<!--===================================================-->
		<div class="panel">
			<div class="panel-heading">
				
			</div>
			<div class="panel-body">
				<form method="post" action="Function/Backup.php">
					<div class="col-sm-3">
						<input type="submit" id="btnBackup" name="btnBackup" class="btn btn-primary" style="width: 100%" value="Backup">
					</div>
				</form>
				<form method="post" action="Function/Restore.php">
					<div class="col-sm-3">
						<input type="submit" id="btnRestore" name="btnRestore" class="btn btn-primary" style="width: 100%" value="Restore">
					</div>
				</form>
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

