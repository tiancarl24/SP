<?php 
include "../utils.php";

$ImageName = $_POST["txtImageName"];

$filename = $_FILES["image"]["name"];
$filetype = $_FILES["image"]["type"];
$filetmp = $_FILES["image"]["tmp_name"];

$directory = "../Carousel/";
$target_file = $directory . basename($_FILES["image"]["name"]);

move_uploaded_file($filetmp, $target_file);

DBOpen();

$imgupload = DBExecute(" INSERT INTO carousel (filename,ImageName)VALUES('$filename','$ImageName')");

DBClose();

redirMsg('../Carousel.php','Image Upload successfully added!!')
?>