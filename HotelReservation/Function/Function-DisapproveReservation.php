<?php 
include "../utils.php"; 
include "../incSecure.php";

DBOpen();

$ResID = $_POST['lblDispproved'];

$rs = DBExecute(" UPDATE reservations SET Status = 'Disapproved' WHERE rowid = " .SQLs($ResID));

DbClose();

redirMsg('../Reservations.php','Reservation Successfully Disapproved!');
 ?>