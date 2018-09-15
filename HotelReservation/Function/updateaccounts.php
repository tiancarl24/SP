<?php 
include '../utils.php';
include '../incSecure.php';

DBOpen();
//dump('dasdas');

$id = $_POST['txtRowID'];
$name = $_POST['txtUpdateName'];
$username = $_POST['txtUpdateUsername'];
$email = $_POST['txtUpdateEmail'];
$add = $_POST['txtUpdateAddress'];
$bday = $_POST['txtUpdateBirthdate'];

$rs = DBExecute("UPDATE users SET name = '$name', username = '$username', address = '$add', email = '$email', birthday = '$bday' WHERE id = '$id' ");


$user = $_SESSION['HotelReservation.name'];
$audit = DBExecute(" INSERT INTO audit SET user = '$user', action = 'Update User: $id', auditdate = '$maniladate', audittime = '$manilatime' ");

DbClose();

redirMsg('../Accounts.php','Update Account Successfully!');
?>