<?php 
	include "../utils.php"; 
	include "../incSecure.php";

	DBOpen();

	$rs = DBExecute(" mysqldump --database hotelreservation > dump.sql ");

	DBClose();

	redirMsg('../home.php','Database Successfully Backup!');
 ?>