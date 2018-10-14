<?php 
include "../utils.php"; 
include "../incSecure.php";

DBOpen();
	
	$ROWID = $_POST['ctr_ID'];

	$rs = DBGetData(" SELECT id from tc WHERE id = " .SQLs($ROWID));

	$rs = json_encode($rs);

	echo $rs;

DBClose();

?>