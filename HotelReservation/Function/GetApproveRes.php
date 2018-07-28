<?php 
include "../utils.php"; 
include "../incSecure.php";

DBOpen();

$ROWID = $_POST['ctr_ID'];

$rs = DBGetData(" SELECT * from reservations WHERE rowid = " .SQLs($ROWID));

$rs = json_encode($rs);

echo $rs;

DbClose();
?>