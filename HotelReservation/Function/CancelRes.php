<?php 
include '../utils.php';

$RESID = $_POST['lblcancel'];

DBOpen();

$getdata = DBGetData(" SELECT totalpaid FROM reservations WHERE reservationid = " .SQLs($RESID));

$getdata = $getdata[0][0] / 2;

$getresday = DBGetData(" SELECT checkindate FROM reservations WHERE reservationid = ".SQLs($RESID));
	//dump($getdata);

$rs = DBExecute(" UPDATE reservations SET status = 'Cancelled', totalpaid = '$getdata' WHERE reservationid = " .SQLs($RESID));

DBClose();

redirMsg('../Reservations.php','Reservation Successfully Cancelled!');
?>