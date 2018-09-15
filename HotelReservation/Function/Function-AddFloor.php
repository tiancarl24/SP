<?php
include "../utils.php";
include "../incSecure.php";


// dump($birthday);

DBOpen();

$floors = $_POST["txtFloor"];

$rs = DBExecute(" INSERT INTO floors SET 
	floors = '$floors'
	");

$user = $_SESSION['HotelReservation.name'];
$audit = DBExecute(" INSERT INTO audit SET user = '$user', action = 'Add Floor: $floors', auditdate = '$maniladate', audittime = '$manilatime' ");

DBClose();

redirMsg('../Floors.php','Register Floor Successfully!');
?>