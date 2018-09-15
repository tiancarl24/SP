<?php 
include "../utils.php"; 
include "../incSecure.php";

$RESID = $_POST['lblresid'];

DBOpen();

$rs = DBExecute(" UPDATE reservations set checkinstatus = 'checkout' where reservationid = " .SQLs($RESID));

$user = $_SESSION['HotelReservation.name'];
$audit = DBExecute(" INSERT INTO audit SET user = '$user', action = 'Checkout: $RESID', auditdate = '$maniladate', audittime = '$manilatime' ");

DBClose();

redirMsg('../CheckinReservation.php','Guest Successfully Check-out');
?>