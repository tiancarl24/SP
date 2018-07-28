<?php 
include "../utils.php"; 
include "../incSecure.php";

DBOpen();

	$RowID = $_POST['lblDeleteRowID'];

	$rs = DBExecute(" DELETE from users WHERE id = " .SQLs($RowID));

DBClose();

redirMsg('../Accounts.php','Account Successfully Deleted!');
 ?>