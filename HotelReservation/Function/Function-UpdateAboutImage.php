<?php 
include "../utils.php"; 
include "../incSecure.php";

$RowID = $_POST['txtRowID'];
$imagename = $_POST['txtImageFile'];
//dump($imagename);

$filename = $_FILES["image"]["name"];
$filetype = $_FILES["image"]["type"];
$filetmp = $_FILES["image"]["tmp_name"];

$directory = "../Gallery/";
$target_file = $directory . basename($_FILES["image"]["name"]);

move_uploaded_file($filetmp, $target_file);
DBOpen();
$rs = DBExecute(" UPDATE about SET filename = '$imagename' WHERE id = " .SQLs($RowID));

DbClose();

redirMsg('../About.php','Hotel Information Successfully Updated!');
?>