<?php include '../utils.php';

$RESID = $_POST['viewresid'];

DBOpen();

	$rs = DBGetData(" SELECT reservationid FROM reservations WHERE reservationid = " .SQLs($RESID));

	echo json_encode($rs);

DBClose();
 ?>