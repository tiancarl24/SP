<?php 
include "../utils.php"; 
include "../incSecure.php";

$RowID = $_POST['txtRowID'];
$imagename = $_POST['txtImageFile'];
// dump($imagename);

$filename = $_FILES["txtImageFile"]["name"];
$filetype = $_FILES["txtImageFile"]["type"];
$filetmp = $_FILES["txtImageFile"]["tmp_name"];

$directory = "../Gallery/";
$target_file = $directory . basename($_FILES["txtImageFile"]["name"]);

move_uploaded_file($filetmp, $target_file);

DBOpen();
$rs = DBExecute(" UPDATE about SET filename = '$filename' WHERE id = " .SQLs($RowID));

DbClose();

redirMsg('../About.php','Hotel Information Successfully Updated!');
?>