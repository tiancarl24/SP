<?php 
include "../utils.php"; 
include "../incSecure.php";

DBOpen();

$RowID = $_POST['lblDeleteRowID'];

$rs = DBExecute(" DELETE from users WHERE id = " .SQLs($RowID));

$user = $_SESSION['HotelReservation.name'];
$audit = DBExecute(" INSERT INTO audit SET user = '$user', action = 'Delete User: $RowID', auditdate = '$maniladate', audittime = '$manilatime' ");

DBClose();

redirMsg('../Accounts.php','Account Successfully Deleted!');
?>