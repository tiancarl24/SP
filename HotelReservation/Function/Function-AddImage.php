<?php 
include "../utils.php";
include '../incSecure.php';

$ImageName = $_POST["txtImageName"];
$Floor = $_POST["Floor"];

$filename = $_FILES["image"]["name"];
$filetype = $_FILES["image"]["type"];
$filetmp = $_FILES["image"]["tmp_name"];

$directory = "../Gallery/";
$target_file = $directory . basename($_FILES["image"]["name"]);

move_uploaded_file($filetmp, $target_file);

DBOpen();

$imgupload = DBExecute(" INSERT INTO gallery (filename,ImageName,Floor)VALUES('$filename','$ImageName','$Floor')");

$user = $_SESSION['HotelReservation.name'];
$audit = DBExecute(" INSERT INTO audit SET user = '$user', action = 'Add image gallery: $ImageName', auditdate = '$maniladate', audittime = '$manilatime' ");

DBClose();

redirMsg('../Gallery.php','Image Upload successfully added!!')
?>