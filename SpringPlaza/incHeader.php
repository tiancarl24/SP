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
                    <li><a id="btnviewres" name="btnviewres" class="btn btn-color1 call-to-action-button show-inquiry-modal ShowModal">View Reservation</a></li>
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

