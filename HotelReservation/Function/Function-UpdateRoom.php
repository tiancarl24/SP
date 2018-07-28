<?php
include "../utils.php";

$RoomID = $_POST["UpdateRoomID"];
$RoomName = $_POST["UpdateRoomName"];
$RoomType = $_POST["UpdateRoomType"];
$RoomDescription = $_POST["UpdateRoomDescription"];
$RoomPrice = $_POST["UpdateRoomPrice"];


DBOpen();

// $rs = DBExecute(" UPDATE iteminformation SET
// 	ItemNo = '$ItemNo', ItemName = '$ItemName', ItemDescription = '$ItemDescription', Quantity = '$Quantity', Price = '$Price', 
// 	Status = 'Pending' WHERE ItemNo = '$ItemNo'");

$AddRoom = DBExecute(" UPDATE roominformation SET RoomID = '$RoomID', RoomName = '$RoomName', RoomType = '$RoomType', RoomPrice = '$RoomPrice', 
	RoomDescription = '$RoomDescription' WHERE RoomID = '$RoomID'");


DBClose();

redirMsg('../Rooms.php','Update Room successfully!!')

?>