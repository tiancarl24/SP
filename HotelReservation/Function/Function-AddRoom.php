<?php 
include "../utils.php";
include '../incSecure.php';

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

if ($RoomNo == 13)
{
	redirMsg('../Rooms.php','Room 13 is not allowed');
}
else if ($RoomNo == 113)
{
	redirMsg('../Rooms.php','Room 13 is not allowed');
}
else if ($RoomNo == 213)
{
	redirMsg('../Rooms.php','Room 13 is not allowed');
}
else if ($RoomNo == 313)
{
	redirMsg('../Rooms.php','Room 13 is not allowed');
}
else if ($RoomNo == 413)
{
	redirMsg('../Rooms.php','Room 13 is not allowed');
}
else if ($RoomNo == 513)
{
	redirMsg('../Rooms.php','Room 13 is not allowed');
}
else if ($RoomNo == 613)
{
	redirMsg('../Rooms.php','Room 13 is not allowed');
}
else if ($RoomNo == 713)
{
	redirMsg('../Rooms.php','Room 13 is not allowed');
}
else if ($RoomNo == 813)
{
	redirMsg('../Rooms.php','Room 13 is not allowed');
}
else if ($RoomNo == 913)
{
	redirMsg('../Rooms.php','Room 13 is not allowed');
}
else if ($RoomNo == 1013)
{
	redirMsg('../Rooms.php','Room 13 is not allowed');
}
else
{
	DBOpen();

	$imgupload = DBExecute(" INSERT INTO roomimage (filename,RoomID)VALUES('$filename','$RoomID')");


	$AddRoom = DBExecute(" INSERT INTO roominformation SET
		RoomID = '$RoomID', RoomName = '$RoomName', RoomNo = '$RoomNo',
		RoomType = '$RoomType', RoomPrice = '$RoomPrice',	
		RoomDescription = '$RoomDescription', RoomAvailability = 'Available'
		");

	$user = $_SESSION['HotelReservation.name'];
	$audit = DBExecute(" INSERT INTO audit SET user = '$user', action = 'Add Room: $RoomNo', auditdate = '$maniladate', audittime = '$manilatime' ");
	DBClose();

	redirMsg('../Rooms.php','New room successfully added!!');
}
?>