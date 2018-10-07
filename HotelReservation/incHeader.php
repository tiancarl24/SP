<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Spring Plaza Hotel</title>

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
  <link rel="icon" type="image" href="../SpringPlaza/img/favicon.png">
  <link href="Library/css/bootstrap.css" rel="stylesheet">

  <link href="Library/css/nifty.css" rel="stylesheet">
  <!--Premium Line Icons [ OPTIONAL ]-->
  <link href="Library/premium/icon-sets/icons/line-icons/premium-line-icons.css" rel="stylesheet">
  <link href="Library/css/demo/nifty-demo-icons.min.css" rel="stylesheet">

  <link href="Library/css/demo/nifty-demo.min.css" rel="stylesheet">

  <link href="Library/plugins/morris-js/morris.min.css" rel="stylesheet">

  <link href="Library/plugins/magic-check/css/magic-check.min.css" rel="stylesheet">
  <!--Font Awesome [ OPTIONAL ]-->
  <link href="Library/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="Library/style.css">

  <link href="Library/plugins/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet">
  <link href="Library/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css" rel="stylesheet">
  <!--Dropzone [ OPTIONAL ]-->
  <link href="Library/plugins/dropzone/dropzone.min.css" rel="stylesheet">
  
  <!--JAVASCRIPT-->

  <!--Pace - Page Load Progress Par [OPTIONAL]-->
  <link href="Library/plugins/pace/pace.min.css" rel="stylesheet">
  <script src="Library/plugins/pace/pace.min.js"></script>

  <!--jQuery [ REQUIRED ]-->
  <script src="Library/js/jquery-2.2.4.min.js"></script>

  <!--BootstrapJS [ RECOMMENDED ]-->
  <script src="Library/js/bootstrap.min.js"></script>

  <!--NiftyJS [ RECOMMENDED ]-->
  <script src="Library/js/nifty.js"></script>
  <!--=================================================-->
  <!--Demo script [ DEMONSTRATION ]-->
  <script src="Library/js/demo/nifty-demo.min.js"></script>

  <!--Morris.js [ OPTIONAL ]-->
  <script src="Library/plugins/morris-js/morris.min.js"></script>
  <script src="Library/plugins/morris-js/raphael-js/raphael.min.js"></script>

  <!--Sparkline [ OPTIONAL ]-->
  <script src="Library/plugins/sparkline/jquery.sparkline.min.js"></script>
  <!--DataTables [ OPTIONAL ]-->
  <script src="Library/plugins/datatables/media/js/jquery.dataTables.js"></script>
  <script src="Library/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
  <script src="Library/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>

  <!--Flot Chart [ OPTIONAL ]-->
  <script src="plugins/flot-charts/jquery.flot.min.js"></script>
  <script src="plugins/flot-charts/jquery.flot.resize.min.js"></script>

  <!--DataTables Sample [ SAMPLE ]-->
  <script src="Library/js/demo/tables-datatables.js"></script>

  <!--Dropzone [ OPTIONAL ]-->
  <script src="Library/plugins/dropzone/dropzone.min.js"></script>

</head>
<style type="text/css">
tr.row_selected{
  background-color: #fdd88d !important;
  color: white;
}
</style>
<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
  <div id="container" class="effect aside-float aside-bright mainnav-lg">

    <!--NAVBAR-->
    <!--===================================================-->
    <header id="navbar">
      <div id="navbar-container" class="boxed">

        <!--Brand logo & name-->
        <!--================================-->
        <div class="navbar-header">
          <a href="index.html" class="navbar-brand">
            <img src="../SpringPlaza/img/favicon.png" alt="Nifty Logo" class="brand-icon">
            <div class="brand-title">
              <span class="brand-text">Spring Plaza Hotel</span>
            </div>
          </a>
        </div>
        <!--================================-->
        <!--End brand logo & name-->


        <!--Navbar Dropdown-->
        <!--================================-->
        <div class="navbar-content clearfix">
          <ul class="nav navbar-top-links pull-left">

            <!--Navigation toogle button-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <li class="tgl-menu-btn">
              <a class="mainnav-toggle" href="#">
                <i class="demo-pli-view-list screen"></i>
              </a>
            </li>
            <!--End Navigation toogle button-->
          </ul>
          <ul class="nav navbar-top-links pull-right">
            <!--User dropdown-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <li id="dropdown-user" class="dropdown">
              <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                <span class="pull-right">
                  <!--<img class="img-circle img-user media-object" src="img/profile-photos/1.png" alt="Profile Picture">-->
                  <i class="demo-pli-male ic-user screen"></i>
                </span>
                <div class="username hidden-xs"><?php echo $_SESSION['HotelReservation.name'] ?></div>
              </a>


              <div class="dropdown-menu dropdown-menu-md dropdown-menu-right panel-default">
                <!-- User dropdown menu -->
                <ul class="head-list">
                  <li>
                    <a href="#">
                      <span class="badge badge-danger pull-right">9</span>
                      <i class="demo-pli-mail icon-lg icon-fw"></i> Messages
                    </a>
                  </li>
                </ul>

                <!-- Dropdown footer -->
                <div class="pad-all text-right">
                  <a href="pages-login.html" class="btn btn-primary">
                    <i class="demo-pli-unlock"></i> Logout
                  </a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <!--END NAVBAR-->