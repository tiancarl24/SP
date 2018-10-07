<?php
include "../utils.php";
include '../incSecure.php';

$id = $_POST["GetImageID"];
$user = $_SESSION['HotelReservation.name'];


DBOpen();

$AddRoom = DBExecute(" DELETE FROM carousel WHERE id = '$id'");

$audit = DBExecute(" INSERT INTO audit SET user = '$user', action = 'Delete image in carousel: $id', auditdate = '$maniladate', audittime = '$manilatime' ");

DBClose();

redirMsg('../Carousel.php','Delete Image Carousel Successfully!!')

?>