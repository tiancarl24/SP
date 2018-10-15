<?php 
	include '../utils.php';

	$RESID = $_POST['ctr_ID'];

	DBOpen();

	$rs = DBGetData(" SELECT reservationid FROM reservations WHERE reservationid = " .SQLs($RESID));

	echo json_encode($rs); 

	DBClose();
 ?>