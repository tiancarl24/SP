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

$user = $_SESSION['HotelReservation.name'];
$audit = DBExecute(" INSERT INTO audit SET user = '$user', action = 'Checkin: $RESID', auditdate = '$maniladate', audittime = '$manilatime' ");

DBClose();

redirMsg('../ApprovedReservations.php','Guest Successfully Check-in');
?>