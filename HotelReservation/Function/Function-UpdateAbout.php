<?php 
include "../utils.php"; 
include "../incSecure.php";

DBOpen();

$RowID = $_POST['txtRowID'];
$Description = $_POST['txtUpdateAboutDescription'];
$imagename = $_POST['txtImageFile'];
dump($imagename);

$rs = DBExecute(" UPDATE about SET Description = '$Description' WHERE id = " .SQLs($RowID));

$user = $_SESSION['HotelReservation.name'];
$audit = DBExecute(" INSERT INTO audit SET user = '$user', action = 'Update About: $imagename', auditdate = '$maniladate', audittime = '$manilatime' ");

DbClose();

redirMsg('../About.php','Hotel Information Successfully Updated!');
?>