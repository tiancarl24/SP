<?php
include "../utils.php";
include "../incSecure.php";


// dump($birthday);

DBOpen();

$username = $_POST["txtUsername"];
$password = encode($_POST["txtPassword"]);
$name = $_POST["txtName"];
$email = $_POST["txtEmail"];
$address = $_POST["txtAddress"];
$birthday = $_POST["txtBirthdate"];
//$password = encode($password)

$rs = DBExecute(" INSERT INTO users SET 
	username = '$username',
	password = '$password',
	name = '$name',
	email = '$email',
	address = '$address',
	birthday = '$birthday'
	");

$user = $_SESSION['HotelReservation.name'];
$audit = DBExecute(" INSERT INTO audit SET user = '$user', action = 'Add user: $username', auditdate = '$maniladate', audittime = '$manilatime' ");

DBClose();

redirMsg('../Accounts.php','Register Account Successfully!');
?>