<?php 
include '../utils.php';


$ID = $_POST['ctr_ID'];
DBOpen();

$rs = DBGetData(" SELECT * FROM tc WHERE id = " .SQLs($ID));

echo json_encode($rs);

DBClose();
 ?>