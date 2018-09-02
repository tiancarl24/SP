<?php 
include "../utils.php"; 
include "../incSecure.php";

$FROM = $_POST['FROM'];
$TO = $_POST['TO'];
$STATUS = $_POST['STATUS'];
//dump($FROM);

DBOpen();

$rs = DBGetData2("SELECT * FROM reservations WHERE checkindate BETWEEN '$FROM' and '$TO' AND status = '$STATUS' ");

//dump($rs);

$rs = json_encode($rs);

echo $rs;

DBClose();
?>