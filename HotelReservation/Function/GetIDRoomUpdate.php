<?php
include "../utils.php";

DBOpen();

$ctr = $_POST['ctr_ID'];

$rs = DBGetData(" SELECT * FROM roominformation WHERE RoomID = '$ctr'");

$rs = json_encode($rs);

echo $rs;

DBClose();


?>