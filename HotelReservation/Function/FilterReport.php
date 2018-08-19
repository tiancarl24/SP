<?php 
include "../utils.php"; 
include "../incSecure.php";

$FROM = $_POST['FROM'];
$TO = $_POST['TO'];
$STATUS = $_POST['STATUS'];
//dump($STATUS);

DBOpen();

$rs = DBGetData2("SELECT * FROM reservations WHERE checkindate BETWEEN '$FROM' and '$TO' AND status = '$STATUS' ");

$rs = json_encode($rs);

echo $rs;

DBClose();
?>