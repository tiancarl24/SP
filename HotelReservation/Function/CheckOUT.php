<?php 
	include "../utils.php"; 
	include "../incSecure.php";

	$RESID = $_POST['lblresid'];

	DBOpen();

	$rs = DBExecute(" UPDATE reservations set checkinstatus = 'checkout' where reservationid = " .SQLs($RESID));

	DBClose();

	redirMsg('../CheckinReservation.php','Guest Successfully Check-out');
 ?>