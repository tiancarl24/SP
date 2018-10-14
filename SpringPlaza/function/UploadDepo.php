<?php 
include "../utils.php";
include '../incSecure.php';

$ResID = $_POST["viewresid"];

$filename = $_FILES["image"]["name"];
$filetype = $_FILES["image"]["type"];
$filetmp = $_FILES["image"]["tmp_name"];

$directory = "Image/";
$target_file = $directory . basename($_FILES["image"]["name"]);

move_uploaded_file($filetmp, $target_file);

	DBOpen();

	$imgupload = DBExecute(" INSERT INTO deposit (filename, ResID)VALUES('$filename','$ResID')");

	DBClose();

	redirMsg('../index.php','New room successfully added!!');
?>