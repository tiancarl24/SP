<?php
include "utils.php";
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Spring Plaza Hotel</title>
    <meta name="description"
    content="The Spring Plaza Hotel is a budget hotel located in the developed city of Dasmarinas City, Cavite. Conveniently located away from the hustle and bustle of the city but close to everything. Only 15 minutes away from Tagaytay and within easy access to two of the cities leading department stores, this is the ideal choice for those wanting for a quiet and private retreat without breaking the bank.We present travellers clean and amazingly affordable rooms. Guests will enjoy the laid back and serene environment of our location.">
    <meta name="author" content="Themeinjection.com">

    <!-- Bootstrap -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap 3 Date Picker -->
    <link href="bower_components/bootstrap-3-datepicker/dist/css/bootstrap-datepicker.min.css" rel='stylesheet' type='text/css'>

    <!-- Google Open Sans Font -->
    <link href='fonts.css' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

    <!-- Animate Css -->
    <link href="bower_components/animate.css/animate.min.css" rel='stylesheet' type='text/css'>

    <!-- Simple Line Icons -->
    <link href="bower_components/simple-line-icons/css/simple-line-icons.css" rel='stylesheet' type='text/css'>


    <!-- Theme Style -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- Available main styles: styles-blue.css, styles-green.css, styles-orange.css, styles-pink.css,
        styles-violet.css, styles-gray.css-->

        <style>
        form .website_hp{
            display: none;
        }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="img/ico/favicon.png">

</head>
<body>
    <div id="page-top"></div>

    <!--Navigation Top start-->
    <section class="top-navbar container navbar-fixed-top">
        <nav class="navbar navbar-default" id="navigation-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--Brand / Logo start-->
                <a class="navbar-brand scroll-to" href="#page-top">
                    <img src="img/navbar-logo.png" class="img-responsive" alt="Accommodation Landing Page"/>
                </a>
                <!--Brand / Logo end-->
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <!-- Nav-Links start -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="scroll-to" href="#page-top">Home</a></li>
                    <li><a class="scroll-to" href="#sc-features">Amenities</a></li>
                    <li><a class="scroll-to" href="#sc-rooms">Rooms</a></li>
                    <li><a class="scroll-to" href="#Gallery">Gallery</a></li>
                    <li><a class="scroll-to" href="#MapLocation">Terms and Conditions</a></li>
                    <li><a class="scroll-to" href="#About">About Us</a></li>
                    <li><a class="scroll-to" href="#Contact">Contact Us</a></li>
                    <li><a id="CancelRes" class="btn btn-color1 call-to-action-button show-inquiry-modal ShowModal" href="#Contact">View Reservation</a></li>
                    <li>
                    </li>
                </ul>
                <!-- Nav-Links end -->
            </div>
        </div>
    </nav>
</section>
<!--Navigation Top end-->

<!--Teaser Slider start-->
<section class="teaser-slider">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-pause="false" data-interval="5000">
        <div class="carousel-inner" role="listbox">
            <!--Slider Items start-->
            <div class="item active">
                <img src="../HotelReservation/Carousel/spring.jpg" alt="The Sea Villa">

                <div class="carousel-caption">Describe the Image for SEO 1</div>
            </div>
            <?php
            DBOpen();
            $rs = DBGetData("SELECT * FROM carousel");
            foreach($rs as $rs)
            {
                wr("<div class='item'>
                    <img src='../HotelReservation/Carousel/$rs[1]' alt='The Sea Villa'>
                    <div class='carousel-caption'>Describe the Image for SEO 2</div>
                    </div>");
            }
            DBClose();
            ?>
            <!--Slider Items end-->
        </div>
        <!-- Controls start -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!-- Controls end -->
    </div>
</section>
<div class="teaser-slider-ph"></div>
<!--Teaser Slider end-->

<!--Start content before Slider-->
<div class="content-after-slider">

    <!--Call to Action start-->
    <section class="call-to-action container" id="sc-call-to-action">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="call-to-action-box text-center">
                    <div class="call-to-action-triangle"></div>
                    <button id="ShowModal" class="btn btn-color1 call-to-action-button show-inquiry-modal ShowModal">
                        <i class="icon-calendar icons"></i> Check Availability
                    </button>
                    <a class="call-to-action-phone" href="tel:+13174562564">Hotline (02) - 7811540 / (+63) 932 921 3163</a>
                </div>
            </div>
        </div>
    </section>
    <!--Call to Action end-->
    <form method="GET" action="selectroom.php">
        <?php 
        $RTYPE = $_SESSION['cboRoom'];
        $CIN = $_SESSION['dtCheckIN'];
        $COUT = $_SESSION['dtCheckOUT'];
        $ADULTS = $_SESSION['txtAdult'];
        $CHILD = $_SESSION['txtChild'];
        $FNAME = $_SESSION['txtFirstname'];
        $LNAME = $_SESSION['txtLastname'];
        $ADDRESS = $_SESSION['txtAddress'];
        $ZIPCODE = $_SESSION['txtZipcode'];
        $CITY = $_SESSION['txtCity'];
        $PHONE = $_SESSION['txtPhone'];
        $EMAIL = $_SESSION['txtEmail'];
        ?>   

        <!--Inquiry Modal start-->
        <div class="modal fade" id="inquiryModal" tabindex="-1" role="dialog" aria-labelledby="inquiryModalLabel" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="#" method="post" id="inquiry-form" name="inquiry-form">
                        <input type="hidden" name="action" value="send_inquiry_form"/>
                        <input type="text" class="website_hp" name="website_hp"/>

                        <!-- Modal header start -->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times-circle"></i></button>
                            <h4 class="modal-title" id="inquiryModalLabel"><i class="icon-calendar"></i> Check Availability</h4>
                        </div>
                        <!-- Modal header end -->

                        <!-- Modal body start -->
                        <div class="modal-body">

                            <!-- Inquiry Room and Date start -->
                            <div class="room-and-date">
                                <div class="alert hidden" id="inquiry-form-msg"></div>
                                <div class="room-select">
                                    <div class="input-group">
                                        <?php 
                                        DBOpen();

                                        $rooms = DBGetData(" SELECT distinct roomtype from roominformation where roomavailability = 'Available' ");
                                        DBClose();
                                        wr('<select name="cboRoom" id="cboRoom" class="form-control" required>');
                                        wr('<option value="">Select a Room Type!</option>');
                                        foreach($rooms as $rooms)
                                        {
                                            wr('<option value="'.$rooms[0].'">'.$rooms[0].'</option>');
                                        }
                                        wr('</select>');
                                        ?>
                                    </div>
                                </div>
                                <div class="inquiry-check-in">
                                    <div class="date-select">
                                        <label for="inquiry-date-check-in">CHECK-IN - When will you come?</label>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                            <input type="text" class="form-control datepicker" name="dtCheckIN" id="dtCheckIN" placeholder="Date: mm/dd/yyyy" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="inquiry-check-out">
                                    <div class="date-select">
                                        <label for="inquiry-date-check-out">CHECK-OUT - When will you go?</label>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                            <input type="text" class="form-control datepicker" name="dtCheckOUT" placeholder="Date: mm/dd/yyyy" id="dtCheckOUT" required="">
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="inquiry-people">
                                    <div class="people-select">
                                        <label for="inquiry-children">CHILDREN - With children?</label>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-user-follow"></i></span>
                                            <select name="txtChild" class="form-control" id="txtChild">
                                                <option value="0">Without children’s</option>
                                                <option value="1">1 - Child</option>
                                                <option value="2">2 - Children</option>
                                                <option value="3">3 - Children</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="people-select" style="padding-right: 7px;">
                                        <label for="txtAdult">ADULTS - How many guests?</label>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-user-follow"></i></span>
                                            <select name="txtAdult" class="form-control" id="txtAdult" required="">
                                                <option value="1">1 - Adult</option>
                                                <option value="2">2 - Adult</option>
                                                <option value="3">3 - Adult</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!-- Inquiry Room and Date end -->

                            <hr/>

                            <!-- Appointment Personal Information start -->
                            <div class="personal-information">
                                <h2>Personal Information</h2>

                                <div class="form-group first-name-group">
                                    <label for="txtFirstname">First Name</label>
                                    <input type="text" name="txtFirstname" class="form-control" id="txtFirstname" placeholder="Enter your first name" required="">
                                </div>
                                <div class="form-group last-name-group">
                                    <label for="txtLastname">Last Name</label>
                                    <input type="text" name="txtLastname" class="form-control" id="txtLastname" placeholder="Enter your last name" required="">
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group address-group">
                                    <label for="txtAddress">Address</label>
                                    <input type="text" name="txtAddress" class="form-control" id="txtAddress" placeholder="Enter your address" required="">
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group zip-code-group">
                                    <label for="txtZipcode">Zip Code</label>
                                    <input type="text" name="txtZipcode" class="form-control" id="txtZipcode" placeholder="Enter your zip-code" >
                                </div>
                                <div class="form-group city-group">
                                    <label for="txtCity">City</label>
                                    <input type="text" name="txtCity" class="form-control" id="txtCity" placeholder="Enter your city" required="">
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group phone-group">
                                    <label for="txtPhone">Phone</label>
                                    <input type="number" name="txtPhone" class="form-control" id="txtPhone" placeholder="Enter your phone no." maxlength="11" required="">
                                </div>
                                <div class="form-group email-group">
                                    <label for="txtEmail">Email</label>
                                    <input type="email" name="txtEmail" class="form-control" id="txtEmail" placeholder="Enter your email"  required="">
                                </div>
                                <div class="clearfix"></div>
                        <!-- <div class="newsletter-checkbox">
                            <input type="checkbox" id="newsletter-cb" name="newsletter" value="Yes, Please send me latest news and updates!">
                            <label for="newsletter-cb">Please send me latest news and updates!</label>
                        </div> -->
                    </div>
                    <!-- Appointment Personal Information end -->

                </div>
                <!-- Modal body end -->

                <!-- Modal footer start -->
                <div class="modal-footer">

                    <div class="inquiry-info">
                        <div class="inquiry-info-sign hidden-xs">!</div>
                        <p>Please note that this is not an actual reservation, but only a request for one. <br/>
                            <strong>We will contact you with a confirmation shortly. Thank you!</strong></p>
                        </div>
                        <button type="submit" id="btnCheckAvailability" name="btnCheckAvailability" class="btn btn-inquiry-submit">Check Availability</button>

                    </div>
                    <!-- Modal footer end -->

                </form>
            </div>
        </div>
    </div>
    <!--Inquiry Modal end-->
</form>
