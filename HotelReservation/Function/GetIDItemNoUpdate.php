<?php
include "../utils.php";

DBOpen();

$ctr = $_POST['ctr_ID'];

$rs = DBGetData(" SELECT iteminformation.id, iteminformation.ItemNo, iteminformation.ItemName, iteminformation.Quantity, iteminformation.Price, iteminformation.ItemDescription, imageupload.filename FROM iteminformation INNER JOIN imageupload ON iteminformation.ItemNo = imageupload.ItemNo WHERE iteminformation.ItemNo = '$ctr'");

$rs = json_encode($rs);

echo $rs;

DBClose();


?>