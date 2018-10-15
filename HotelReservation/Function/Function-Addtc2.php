<?php
include "../utils.php";
include "../incSecure.php";


// dump($birthday);
$tc = $_POST["txttc"];
DBOpen();

$rs = DBExecute(" INSERT INTO tc SET tc = '$tc'");

$user = $_SESSION['HotelReservation.name'];
$audit = DBExecute(" INSERT INTO audit SET user = '$user', action = 'Add TC: $tc', auditdate = '$maniladate', audittime = '$manilatime' ");

DBClose();

redirMsg('../Tc.php','Update Term and Condition Successfully!');
?>