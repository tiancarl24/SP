<?php 
include "../utils.php"; 
include "../incSecure.php";

DBOpen();

	$RowID = $_POST['lblDeleteRowID'];

	$rs = DBExecute(" DELETE from tc WHERE id = " .SQLs($RowID));

	$user = $_SESSION['HotelReservation.name'];
$audit = DBExecute(" INSERT INTO audit SET user = '$user', action = 'Delete Terms and Conditions: $RowID', auditdate = '$maniladate', audittime = '$manilatime' ");

DBClose();

redirMsg('../TC.php','Floor Successfully Deleted!');
 ?>