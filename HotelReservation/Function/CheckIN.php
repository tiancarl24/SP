<?php 
	include "../utils.php"; 
	include "../incSecure.php";

	$RESID = $_POST['lblresid'];

	DBOpen();

	$rs = DBExecute(" UPDATE reservations set checkinstatus = 'Checkin' where reservationid = " .SQLs($RESID));

	DBClose();

	redirMsg('../ApprovedReservations.php','Guest Successfully Check-in');
 ?>