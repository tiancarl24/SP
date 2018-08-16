<?php 
include "../utils.php"; 
include "../incSecure.php";


DBOpen();

$RowID = $_POST['ctr_ID'];

$rs = DBGetData(" SELECT id,Address,TelNo,MobileNo from contact WHERE id = " .SQLs($RowID));

$rs = json_encode($rs);

echo $rs;

DBClose();
?>