<?php
session_start();
$ses_userid = $_SESSION["HotelReservation.id"];
$ses_fullname = $_SESSION["HotelReservation.name"];
$ses_usergroup = $_SESSION["HotelReservation.username"];
$ses_useremail = $_SESSION["HotelReservation.email"];


if (is_null($ses_userid)) redir("../HotelReservation/logout.php");
?>