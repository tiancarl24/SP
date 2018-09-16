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
				<div class="col-sm-4">
					<form method="post" action="Function/Backup.php">
						<input type="submit" id="btnBackup" name="btnBackup" class="btn btn-primary" style="width: 100%" value="Backup">
					</form>
				</div>
				<div class="col-sm-4">
					<input type="button" id="btnRestore" name="btnRestore" class="btn btn-primary" style="width: 100%" value="Restore">
				</div>
			</div>
		</div>
	</div>
</div>

<form method="POST" action="BackupAndRestore.php" enctype="multipart/form-data">
	<div class="modal fade" id="RestoreModal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<!--Modal header-->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
					<h4 class="modal-title">Restore Database</h4>
				</div>
				<!--Modal body-->
				<div class="modal-body">
					<?php
					$conn = mysqli_connect("localhost", "root", "", "hotelreservation");
					if (! empty($_FILES)) 
					{
    // Validating SQL file type by extensions
						if (! in_array(strtolower(pathinfo($_FILES["backup_file"]["name"], PATHINFO_EXTENSION)), array(
							"sql"
						))) 
						{
							$response = array(
								"type" => "error",
								"message" => "Invalid File Type"
							);
						}
						else
						{
							if (is_uploaded_file($_FILES["backup_file"]["tmp_name"])) 
							{
								move_uploaded_file($_FILES["backup_file"]["tmp_name"], $_FILES["backup_file"]["name"]);
								$response = restoreMysqlDB($_FILES["backup_file"]["name"], $conn);
							}
						}
					}

					function restoreMysqlDB($filePath, $conn)
					{
						DBOpen();

						$rs = DBExecute(" DROP SCHEMA hotelreservation ");
						$rs2 = DBExecute(" CREATE SCHEMA hotelreservation ");

						DBClose();

						$sql = '';
						$error = '';

						if (file_exists($filePath)) 
						{
							$lines = file($filePath);

							foreach ($lines as $line) 
							{

            // Ignoring comments from the SQL script
								if (substr($line, 0, 2) == '--' || $line == '') 
								{
									continue;
								}

								$sql .= $line;

								if (substr(trim($line), - 1, 1) == ';') 
								{
									$result = mysqli_query($conn, $sql);
									if (! $result) 
									{
										$error .= mysqli_error($conn) . "\n";
									}
									$sql = '';
								}
        } // end foreach
        
        if ($error) 
        {
        	$response = array(
        		"type" => "error",
        		"message" => $error
        	);
        } 
        else 
        {
        	$response = array
        	(
        		"type" => "success",
        		"message" => "Restore Successfully"
        	);
        }
        exec('rm ' . $filePath);
    } // end if file exists
    
    return $response;
}

?>
<html>
<body>
	<?php
	if (! empty($response)) {
		?>
		<div class="response <?php echo $response["type"]; ?>">
			<?php echo nl2br($response["message"]); ?>
		</div>
		<?php
	}
	?>
	<form method="post" action="" enctype="multipart/form-data"
	id="frm-restore">
	<div class="form-row">
		<div>Choose Backup File</div>
		<div>
			<input type="file" name="backup_file" class="input-file" />
		</div>
	</div>
	<div>
		<input type="submit" class="btn btn-primary" name="restore" value="Restore"
		class="btn-action" />
	</div>
</form>
</body>
</html>
</div>
</div>
<br>
<br>
<!--Modal footer-->
<div class="modal-footer">

</div>
</div>
</div>
</div>
</form>

<script type="text/javascript">
	
	var btnRestore = document.getElementById('btnRestore');
	btnRestore.onclick = function()
	{
		$('#RestoreModal').modal("show");
	}
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

