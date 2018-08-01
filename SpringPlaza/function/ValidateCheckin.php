<?php 
include '../utils.php';

$resID = $_POST['resID'];
$CIN = $_POST['cin'];
$RNO = $_POST['roomno'];
$RTYPE = $_POST['roomtype'];

$timestampIN = strtotime($CIN);
$NEWCIN = date('Y-m-d', $timestampIN);
//dump($RTYPE);

DBOpen();
$rs = DBGetData(" SELECT count(*) from reservations where checkindate = '$NEWCIN' and roomno = '$RNO' and roomtype = '$RTYPE' ");
//dump($rs);

$rs = json_encode($rs);

echo $rs;

DBClose();
?>