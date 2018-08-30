<?php 
	include "../utils.php"; 
	include "../incSecure.php";

	$RESID = $_POST['lblresid'];
	$AMOUNT = $_POST['txtbalance'];

	DBOpen();

	$get = DBGetData(" SELECT * FROM reservations WHERE reservationid = "  .SQLs($RESID));

	$total = $AMOUNT + $get[0][16];

	//dump($total);

	$rs = DBExecute(" UPDATE reservations set checkinstatus = 'Checkin', balance = '0', totalpaid = '$total' where reservationid = " .SQLs($RESID));

	DBClose();

	redirMsg('../ApprovedReservations.php','Guest Successfully Check-in');
 ?>