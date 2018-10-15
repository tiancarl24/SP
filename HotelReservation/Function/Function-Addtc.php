<?php
include "../utils.php";
include "../incSecure.php";


// dump($birthday);
$tc = $_POST["txttc"];
$id = $_POST['lblupdate'];
DBOpen();

$rs = DBExecute(" UPDATE tc SET tc = '$tc' WHERE id = " .SQLs($id));

$user = $_SESSION['HotelReservation.name'];
$audit = DBExecute(" INSERT INTO audit SET user = '$user', action = 'Add TC: $tc', auditdate = '$maniladate', audittime = '$manilatime' ");

DBClose();

redirMsg('../Tc.php','Update Term and Condition Successfully!');
?>