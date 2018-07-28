<?php
include "../utils.php";

$RoomID = $_POST["GetRoomID"];


DBOpen();

$AddRoom = DBExecute(" UPDATE roominformation SET RoomAvailability = 'Not Available' WHERE RoomID = '$RoomID'");

DBClose();

redirMsg('../Rooms.php','Delete Room successfully!!')

?>