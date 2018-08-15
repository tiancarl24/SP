<?php 
include "../utils.php"; 
include "../incSecure.php";

DBOpen();

$RowID = $_POST['txtRowID'];
$Description = $_POST['txtUpdateAboutDescription'];
$imagename = $_POST['txtImageFile'];

$rs = DBExecute(" UPDATE about SET Description = '$Description' WHERE id = " .SQLs($RowID));

DbClose();

redirMsg('../About.php','Hotel Information Successfully Updated!');
?>