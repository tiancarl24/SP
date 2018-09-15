<?php 
include "../utils.php"; 
include "../incSecure.php";

DBOpen();


$RowID = $_POST['txtRowID'];
$Title = $_POST['txtUpdateAmenitiesTitle'];
$Description = $_POST['txtUpdateAmenitiesDescription'];

$rs = DBExecute(" UPDATE amenities SET Title = '$Title', Description = '$Description' WHERE id = " .SQLs($RowID));

$user = $_SESSION['HotelReservation.name'];
$audit = DBExecute(" INSERT INTO audit SET user = '$user', action = 'Update Amenities: $Title', auditdate = '$maniladate', audittime = '$manilatime' ");



DbClose();

redirMsg('../Amenities.php','Amenities Successfully Updated!');
?>