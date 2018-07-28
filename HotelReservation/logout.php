<?php
include "utils.php";
include "incSecure.php";

session_start();

$ses_userid = $_SESSION["HotelReservation.id"];
// DBOpen();
// DBExecute("UPDATE users SET date2='$manilanow' WHERE userid='$ses_userid'");
// DBClose();

session_destroy();

redir("index.php");
?>