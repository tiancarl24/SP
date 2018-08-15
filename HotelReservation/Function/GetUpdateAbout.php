<?php 
include "../utils.php"; 
include "../incSecure.php";


DBOpen();

$RowID = $_POST['ctr_ID'];
//dump($RowID);

$rs = DBGetData(" SELECT id,filename,Description from about WHERE id = " .SQLs($RowID));

$rs = json_encode($rs);

echo $rs;

DBClose();
?>