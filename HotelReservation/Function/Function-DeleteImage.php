<?php
include "../utils.php";

$id = $_POST["GetImageID"];


DBOpen();

$AddRoom = DBExecute(" DELETE FROM carousel WHERE id = '$id'");

DBClose();

redirMsg('../carousel.php','Delete Image Carousel Successfully!!')

?>