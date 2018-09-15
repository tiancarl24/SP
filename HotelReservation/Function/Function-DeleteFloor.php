<?php 
include "../utils.php"; 
include "../incSecure.php";

DBOpen();

	$RowID = $_POST['lblDeleteRowID'];

	$rs = DBExecute(" DELETE from floors WHERE id = " .SQLs($RowID));

	$user = $_SESSION['HotelReservation.name'];
$audit = DBExecute(" INSERT INTO audit SET user = '$user', action = 'Delete Floor: $RowID', auditdate = '$maniladate', audittime = '$manilatime' ");

DBClose();

redirMsg('../Floors.php','Floor Successfully Deleted!');
 ?>