<?php 
include "../utils.php";

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

DBClose();

redirMsg('../Gallery.php','Image Upload successfully added!!')
?>