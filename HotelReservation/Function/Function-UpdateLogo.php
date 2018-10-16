<?php 
include "../utils.php";
include '../incSecure.php';

$id = $_POST['GetLogoID'];

$filename = $_FILES["UpdateLogo"]["name"];
$filetype = $_FILES["UpdateLogo"]["type"];
$filetmp = $_FILES["UpdateLogo"]["tmp_name"];

$directory = "RoomImages/";
$target_file = $directory . basename($_FILES["UpdateLogo"]["name"]);

move_uploaded_file($filetmp, $target_file);
DBOpen();

$rs = DBExecute(" UPDATE webtitle SET filename = '$filename' WHERE id = " .SQLs($id));

DBClose();

redirMsg('../Title.php','New room successfully added!!');
?>