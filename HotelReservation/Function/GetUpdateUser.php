<?php 
include "../utils.php"; 
include "../incSecure.php";


DBOpen();

$RowID = $_POST['ctr_ID'];

$rs = DBGetData(" SELECT id,name,username,email,address,birthday from users WHERE id = " .SQLs($RowID));

$rs = json_encode($rs);

echo $rs;

DBClose();
?>