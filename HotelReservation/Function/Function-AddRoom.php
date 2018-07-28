<?php 
include "../utils.php";

$RoomID = $_POST["txtRoomID"];
$RoomNo = $_POST["txtRoomNo"];
$RoomName = $_POST["txtRoomName"];
$RoomType = $_POST["txtRoomType"];
$RoomDescription = $_POST["txtRoomDescription"];
$RoomPrice = $_POST["txtRoomPrice"];
$txtQuantity = $_POST["txtQuantity"];

$filename = $_FILES["image"]["name"];
$filetype = $_FILES["image"]["type"];
$filetmp = $_FILES["image"]["tmp_name"];

$directory = "RoomImages/";
$target_file = $directory . basename($_FILES["image"]["name"]);

move_uploaded_file($filetmp, $target_file);

DBOpen();

$imgupload = DBExecute(" INSERT INTO roomimage (filename,RoomID)VALUES('$filename','$RoomID')");

for($zx = 1; $zx <= $txtQuantity; $zx++)
{
	$AddRoom = DBExecute(" INSERT INTO roominformation SET
		RoomID = '$RoomID', RoomName = '$RoomName', RoomNo = '$RoomNo',
		RoomType = '$RoomType', RoomPrice = '$RoomPrice',
		RoomDescription = '$RoomDescription', RoomAvailability = 'Available'
		");
	$RoomNo++;
}

DBClose();

redirMsg('../Rooms.php','New room successfully added!!')
?>