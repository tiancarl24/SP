<?php 
include "../utils.php";
include '../incSecure.php';

$id = $_POST['GetImageID'];
$Title = $_POST["UpdateTitle"];

$filename = $_FILES["image"]["name"];
$filetype = $_FILES["image"]["type"];
$filetmp = $_FILES["image"]["tmp_name"];

$directory = "RoomImages/";
$target_file = $directory . basename($_FILES["image"]["name"]);

move_uploaded_file($filetmp, $target_file);
DBOpen();

$rs = DBExecute(" UPDATE webtitle SET Title = '$Title' WHERE id = " .SQLs($id));

DBClose();

redirMsg('../Title.php','New room successfully added!!');
?>