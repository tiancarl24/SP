<?php
include "utils.php";
include "incSecure.php";

session_start();

$ses_userid = $_SESSION["HotelReservation.id"];


DBOpen();
$rs = DBGetData(" SELECT * FROM users WHERE id =" .SQLs($ses_userid));

$audit = DBExecute(" INSERT INTO audit SET user = '".$rs[0][2]."', action = 'Logout', auditdate = '$maniladate', audittime = '$manilatime' ");
DBClose();

session_destroy();

redir("index.php");
?>