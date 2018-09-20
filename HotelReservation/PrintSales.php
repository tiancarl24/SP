<?php 
include "utils.php";
$url = $_SERVER['REQUEST_URI'];
$id = explode("/", $url);
$id = $id[6];
$id = $id[6];
$id = $id[6];
$id = $id[6];
$id = $id[6];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
<script type="text/javascript">
	var full_url = document.URL; 
	var url_array = full_url.split('/') 
	var id = url_array[url_array.length-1];  
	$('#prJEVNO').val(id);
</script>