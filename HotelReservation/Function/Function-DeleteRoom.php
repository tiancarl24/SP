<?php
include "../utils.php";
include '../incSecure.php';

$RoomID = $_POST["GetRoomID"];


DBOpen();

$AddRoom = DBExecute(" UPDATE roominformation SET RoomAvailability = 'Not Available' WHERE RoomID = '$RoomID'");

$user = $_SESSION['HotelReservation.name'];
$audit = DBExecute(" INSERT INTO audit SET user = '$user', action = 'Delete Room: $RoomID', auditdate = '$maniladate', audittime = '$manilatime' ");

DBClose();

redirMsg('../Rooms.php','Delete Room successfully!!')

?>