<?php
include "../utils.php";
include "../incSecure.php";


// dump($birthday);

DBOpen();

$tc = $_POST["txttc"];

$rs = DBExecute(" INSERT INTO tc SET 
	tc = '$tc'
	");

$user = $_SESSION['HotelReservation.name'];
$audit = DBExecute(" INSERT INTO audit SET user = '$user', action = 'Add TC: $tc', auditdate = '$maniladate', audittime = '$manilatime' ");

DBClose();

redirMsg('../Tc.php','Register Floor Successfully!');
?>