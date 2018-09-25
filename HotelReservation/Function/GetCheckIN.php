<?php 
include "../utils.php"; 
include "../incSecure.php";

$RESID = $_POST['ctr_ID'];

DBOpen();

$rs = DBGetData("SELECT * FROM reservations WHERE reservationid = " .SQLs($RESID));

$rs = json_encode($rs);

echo $rs;

DBClose();
?>