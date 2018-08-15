<?php 
include "../utils.php"; 
include "../incSecure.php";

DBOpen();

$RowID = $_POST['txtRowID'];
$Title = $_POST['txtUpdateAmenitiesTitle'];
$Description = $_POST['txtUpdateAmenitiesDescription'];

$rs = DBExecute(" UPDATE amenities SET Title = '$Title', Description = '$Description' WHERE id = " .SQLs($RowID));

DbClose();

redirMsg('../Amenities.php','Amenities Successfully Updated!');
?>