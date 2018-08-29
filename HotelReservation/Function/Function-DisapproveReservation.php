<?php 
include "../utils.php"; 
include "../incSecure.php";

DBOpen();

$ResID = $_POST['lblDispproved'];
$RESID = $_POST['lblResID'];

$rs = DBExecute(" UPDATE reservations SET Status = 'Disapproved' WHERE rowid = " .SQLs($ResID));

$delete = DBExecute(" DELETE FROM reservedate  WHERE reservationid = '$RESID' ");

DbClose();

redirMsg('../Reservations.php','Reservation Successfully Disapproved!');
 ?>