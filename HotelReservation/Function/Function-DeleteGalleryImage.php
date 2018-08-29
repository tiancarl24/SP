<?php
include "../utils.php";

$id = $_POST["GetGalleryImageID"];
//dump($id);


DBOpen();

$AddRoom = DBExecute(" DELETE FROM gallery WHERE id = '$id'");

DBClose();

redirMsg('../Gallery.php','Delete Image Carousel Successfully!!')

?>