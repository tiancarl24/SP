<?php 
include "../utils.php"; 
include "../incSecure.php";

DBOpen();

	$RowID = $_POST['lblDeleteRowID'];

	$rs = DBExecute(" DELETE from floors WHERE id = " .SQLs($RowID));

DBClose();

redirMsg('../Floors.php','Floor Successfully Deleted!');
 ?>