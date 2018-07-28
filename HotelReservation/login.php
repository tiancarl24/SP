<?php 
	include "utils.php";
	include "incSecure";
$UName = $_POST["txtUsername"];
$PWord = $_POST["txtPassword"];

DBOpen();

$rs = DBGetData(" SELECT * FROM users WHERE username =" .SQLs($UName));

if(empty($rs))
	redirMsg("index.php","Username Not Found!");
else
	if($rs[0][4] != encode($PWord))
		redirMsg("index.php","Invalid Password!");



	// $Audit = DBExecute(" INSERT INTO Audit_trail(User, Operation, AuditDate, AuditTime) VALUES(" .SQLs($rs[0][1]) . c . SQLs('Logged in') . c . SQLs($maniladate) . c . SQLs($manilatime) . ")");

	DBClose();
	
	session_start();
	$_SESSION["HotelReservation.id"] = $rs[0][0];
	$_SESSION["HotelReservation.username"] = $rs[0][3];
	$_SESSION["HotelReservation.name"] = $rs[0][2];
	$_SESSION["HotelReservation.email"] = $rs[0][5];

	redir("home.php");


 ?>