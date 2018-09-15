<?php
include "../utils.php";
include '../incSecure.php';

$id = $_POST["GetGalleryImageID"];
//dump($id);


DBOpen();

$AddRoom = DBExecute(" DELETE FROM gallery WHERE id = '$id'");

$user = $_SESSION['HotelReservation.name'];
$audit = DBExecute(" INSERT INTO audit SET user = '$user', action = 'Delete image gallery: $id', auditdate = '$maniladate', audittime = '$manilatime' ");

DBClose();

redirMsg('../Gallery.php','Delete Image Carousel Successfully!!')

?>