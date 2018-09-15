<?php 
include "../utils.php";
include '../incSecure.php';

$ImageName = $_POST["txtImageName"];

$filename = $_FILES["image"]["name"];
$filetype = $_FILES["image"]["type"];
$filetmp = $_FILES["image"]["tmp_name"];

$directory = "../Carousel/";
$target_file = $directory . basename($_FILES["image"]["name"]);

$user = $_SESSION['HotelReservation.name'];
//dump($filename);

move_uploaded_file($filetmp, $target_file);

DBOpen();

$imgupload = DBExecute(" INSERT INTO carousel (filename,ImageName)VALUES('$filename','$ImageName')");

$audit = DBExecute(" INSERT INTO audit SET user = '$user', action = 'Add image in carousel: $filename', auditdate = '$maniladate', audittime = '$manilatime' ");

DBClose();

redirMsg('../Carousel.php','Image Upload successfully added!!')
?>