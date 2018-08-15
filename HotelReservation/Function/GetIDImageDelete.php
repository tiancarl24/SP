<?php
include "../utils.php";

DBOpen();

$ctr = $_POST['ctr_ID'];
//dump($ctr);

$rs = DBGetData(" SELECT * FROM carousel WHERE id = '$ctr'");
// dump($rs);

$rs = json_encode($rs);

echo $rs;

DBClose();


?>