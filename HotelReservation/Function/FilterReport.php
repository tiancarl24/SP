<?php 
include "../utils.php"; 
include "../incSecure.php";

$FROM = $_POST['FROM'];
$TO = $_POST['TO'];
$STATUS = $_POST['STATUS'];
//dump($FROM);

DBOpen();

$rs = DBGetData2("SELECT * FROM reservations WHERE checkindate BETWEEN '$FROM' and '$TO' AND status = '$STATUS' ");

$total = DBGetData2("SELECT SUM(totalpaid) as totalpaid FROM reservations WHERE checkindate BETWEEN '$FROM' and '$TO' AND status = '$STATUS' ");


$sumtotal = $total[0]["totalpaid"];

$response = array("query"	=>	$rs,	"sum"	=>	$sumtotal);


$rs = json_encode($response);

header("Content-Type: application/json");

echo $rs;

DBClose();
?>