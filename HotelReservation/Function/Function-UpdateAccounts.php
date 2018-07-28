<?php 
include "../utils.php"; 
include "../incSecure.php";

DBOpen();

$RowID = $_POST['txtRowID'];
$username = $_POST['txtUpdateUsername'];
$name = $_POST['txtUpdateName'];
$email = $_POST['txtUpdateEmail'];
$address = $_POST['txtUpdateAddress'];
$bday = $_POST['txtUpdateBirthdate'];

$rs = DBExecute(" UPDATE users SET username = '$username', name = '$name', email = '$email', address = '$address', birthday = '$bday' WHERE id = " .SQLs($RowID));

DbClose();

redirMsg('../Accounts.php','Account Successfully Updated!');
?>