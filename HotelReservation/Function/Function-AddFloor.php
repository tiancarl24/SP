<?php
include "../utils.php";
// include "../incSecure.php";


// dump($birthday);

DBOpen();

$floors = $_POST["txtFloor"];

$rs = DBExecute(" INSERT INTO floors SET 
	floors = '$floors'
	");

DBClose();

redirMsg('../Floors.php','Register Floor Successfully!');
?>