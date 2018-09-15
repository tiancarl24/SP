<?php
include "../utils.php";
include '../incSecure.php';

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

$user = $_SESSION['HotelReservation.name'];
$audit = DBExecute(" INSERT INTO audit SET user = '$user', action = 'Update Room: $RoomID', auditdate = '$maniladate', audittime = '$manilatime' ");


DBClose();

redirMsg('../Rooms.php','Update Room successfully!!')

?>