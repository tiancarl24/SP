<?php 
include "incSecure.php";
include "incHeader.php";
include "incSidenav.php";
?>
<div class="boxed">

  <!--CONTENT CONTAINER-->
  <!--===================================================-->
  <div id="content-container">

    <!--Page Title-->
    <div id="page-title">
      <h1 class="page-header text-overflow">Dashboard</h1>
    </div>
  </div>
</div>

<script type="text/javascript">
	var SuccessReturn = '<?php echo $_POST['msg'] ?>';
	if(SuccessReturn)
	{
		$.niftyNoty
		({
			type: 'success',
			title: '',
			message: SuccessReturn,
			container: 'floating',
			timer: 3000,
		});
	}
</script>

<?php include "incFoot.php" ?>