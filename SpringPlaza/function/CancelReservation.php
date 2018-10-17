<?php 
	include '../utils.php';

	$RESID = $_POST['reserveid'];
	//dump($RESID);

	DBOpen();

	$getdata = DBGetData(" SELECT totalpaid FROM reservations WHERE reservationid = " .SQLs($RESID));

	$getdata = $getdata[0][0] / 2;
	//dump($getdata);

	$rs = DBExecute(" UPDATE reservations SET status = 'Cancelled', totalpaid = '$getdata' WHERE reservationid = " .SQLs($RESID));

	$rs2 = DBExecute("DELETE FROM reservedate WHERE reservationid = " .SQLs($RESID));

	DBClose();

	

	redir("../cancel.php");
 ?>