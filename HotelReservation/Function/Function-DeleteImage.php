<?php
include "../utils.php";

$id = $_POST["GetImageID"];


DBOpen();

$AddRoom = DBExecute(" DELETE FROM gallery WHERE id = '$id'");

DBClose();

redirMsg('../gallery.php','Delete Room successfully!!')

?>