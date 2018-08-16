<?php 
include "../utils.php"; 
include "../incSecure.php";

DBOpen();

$RowID = $_POST['txtRowID'];
$Address = $_POST['txtUpdateContactAddress'];
$TelNo = $_POST['txtUpdateContactTelNo'];
$MobileNo = $_POST['txtUpdateContactMobileNo'];


$rs = DBExecute(" UPDATE contact SET Address = '$Address', TelNo = '$TelNo', MobileNo = '$MobileNo' WHERE id = " .SQLs($RowID));

DbClose();

redirMsg('../Contact.php','Hotel Contact Information Successfully Updated!');
?>