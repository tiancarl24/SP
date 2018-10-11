<?php 
include "incHeader.php";
include "incAmenities.php";
?>
<!--Room Tabs start-->
<section class="room-tabs" id="sc-rooms">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <center><h2>Rooms List</h2></center>
            </div>
            <div class="col-md-12">
                <?php  
                DBOpen();
                $roomlist = DBGetData("SELECT roominformation.id, roominformation.RoomID, roominformation.RoomName, roominformation.RoomDescription, roominformation.RoomPrice, roomimage.RoomID, roomimage.filename FROM roominformation INNER JOIN roomimage ON roominformation.RoomID = roomimage.RoomID GROUP BY roomimage.RoomID");
                foreach($roomlist as $roomlist)
                {
                    wr("<div class='tab-content'>");
                    wr("<div role='tabpanel' class='tab-pane active' id='$roomlist[1]'>");
                    wr("<div class='row'>");
                    wr("<div class='col-md-4'>");
                    wr("<div class='room-tabs-gallery'>");
                    wr("<div class='room-tabs-gallery-image'>");
                    wr("<a class='room-tabs-gallery-preview-container' href='#'>");
                    wr("<img class='img-responsive room-tabs-gallery-preview' src='../HotelReservation/Function/RoomImages/$roomlist[6]' alt='Image Preview' title='The Image Title'/>");
                    wr("</a>");
                    wr("</div>");
                    wr("<div class='clearfix'></div>");
                    wr("</div>");
                    wr("</div>");
                    wr("<div class='col-md-6 room-tabs-description'>");
                    wr("<h3>$roomlist[2]</h3>");
                    wr("<p>$roomlist[3]</p>");
                    wr("<button id='ShowModal2' class='btn btn-color1 call-to-action-button show-inquiry-modal ShowModal'>Book Now</button>");
                    wr("</div>");
                    wr("</div>");
                    wr("</div>");
                    wr("</div>");
                    wr("<br>");
                }
                DBClose();
                ?>
            </div>
        </div>
    </div>
</section>
<!--Room Tabs start-->

<!--Location start-->
<!-- <section class="location" id="MapLocation">
    <iframe frameborder="0" width="100%" height="500"  src='https://maps.google.com?q=<SpringPlazaHotel>&output=embed'></iframe>
        <div class="location-address text-center">
            <address>Location <i class="icon-pointer"></i> Hotel Spring Plaza | Sampaloc, Dasmariñas, Cavite</address>
        </div>
    </section> -->
    <!--Location end-->
    <hr>
    <!--Room Tabs start-->
    <section class="room-tabs" id="Gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Gallery</h2>
                    <div class="row">
                        <?php
                        DBOpen();
                        $floor = DBGetData("SELECT * FROM floors GROUP BY id");
                        foreach($floor as $floor)
                        {
                            wr("<div id='AlbumGalleryID' class='col-lg-4' style='height: auto; border: solid 1px white; padding-bottom: 20px;  background-color: #f68345; color: white;'>");
                            wr("<br>");
                            wr("<h4><center>$floor[1]</center></h4>");
                            wr("<br>");
                            $image = DBGetData("SELECT * FROM gallery WHERE Floor = '$floor[1]'");
                            foreach($image as $image)
                            {
                                wr("<div class='col-lg-4 col-md-4 col-sm-4'>");
                                wr("<a class='room-tabs-gallery-preview-container' href='#'>");
                                wr("<img src='../HotelReservation/Gallery/$image[2]' style='width: 100%; height: 80px; border: solid 1px white; cursor: pointer;' class='room-tabs-gallery-preview'>");
                                wr("</a>");
                                wr("</div>");
                            }
                            wr("</div>");
                        }
                        DBClose();
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <br>
            <form method="POST">
                <div class="modal fade AlbumModal" id="AlbumModal" role="dialog" tabindex="-1" aria-labelledby="" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <!--Modal header-->
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                                <h4 class="modal-title">Gallery</h4>
                            </div>

                            <!--Modal body-->
                            <?php
                            DBOpen();
                            wr("<div class='modal-body'>");
                            wr("<div class='row'>");
                            wr("<div class='col-lg-4 col-md-4 col-sm-4'>");
                            wr("<a class='room-tabs-gallery-preview-container' href='#'>");
                            wr("<img src='../HotelReservation/Gallery/ac1.jpg' style='width: 100%; height: 200px;' class='room-tabs-gallery-preview'>");
                            wr("</a>");
                            wr("</div>");
                            wr("</div>");
                            wr("</div>");
                            DBClose();
                            ?>
                            <br>
                            <br>
                            <!--Modal footer-->
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-default" type="button">No</button>
                                <input type="submit" id="btnYes" name="btnYes" class="btn btn-danger" value="Yes">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--Room Tabs start-->
            <section class="about" id="About">
                <div class="container">
                    <?php
                    DBOpen();
                    $about = DBGetData(" SELECT * FROM about ");
                    foreach($about as $about)
                    {
                        wr("<div class='row'>");
                        wr("<div class='col-md-4'>");
                        wr("<div class='about-image'>");
                        wr("<img src='../HotelReservation/Gallery/$about[1]' alt='Owner Image' class='img-responsive'/>");
                        wr("</div>");
                        wr("</div>");
                        wr("<div class='col-md-8'>");
                        wr("<h2>About the Hotel</h2>");
                        wr("<p>$about[2]</p>");
                        wr("</div>");
                        wr("</div>");
                    }
                    DBClose();
                    ?>

                </div>
            </section>
            <!--About end-->
            <!--Address start-->
            <section class="address" id="Contact">
                <div class="container">
                    <br>
                    <?php
                    DBOpen();
                    $Contact = DBGetData(" SELECT * FROM contact ");
                    foreach($Contact as $Contact)
                    {
                     wr("<div class='row'>");
                     wr("<div class='col-md-12'>");
                     wr("<h2><img src='img/address-logo.png' alt='Logo'/></h2>");
                     wr("<address>$Contact[1]</address>");
                     wr("<p class='address-info'>If you have questions or need additional information, please call Us:</p>");
                     wr("<ul class='phones'>");
                     wr("<li><i class='fa fa-phone'></i>$Contact[2]</li>");
                     wr("<li><i class='fa fa-mobile'></i>$Contact[3]</li>");
                     wr("</ul>");
                     wr("</div>"); 
                 }
                 DBClose();
                 ?>
                 <br>
                 <br>
                 <h2>Message Us</h2>
                 <div style="padding-left: 400px;">
                    <div class="row">
                        <input type="text" id="" name="" class="form-control col-sm-4" placeholder="Email Address" style="width: 50%; margin-right: auto; margin-left: auto; display: block;">
                    </div>
                    <br>
                    <div class="row">
                        <textarea class="form-control" rows="4" style="width: 50%;" placeholder="Message"></textarea>
                    </div>
                </div>
                <br>
                <img src="img/loc.png" style="width: 100%; height: 280px;">
            </div>
        </section>
        <!--Address end-->

        <!--Footer start-->
        <footer class="footer" id="sc-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="footer-copyright">
                            &copy; 2018 Spring Plaza Hotel. All rights reserved.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <ul class="footer-social-media">
                            <li><a href="https://www.twitter.com/tian24_" target="_blank"><i class="fa fa-twitter fa-fw"></i></a></li>
                            <li><a href="https://mail.google.com/springplazahotel247" target="_blank"><i class="fa fa-google-plus fa-fw"></i></a></li>
                            <li><a href="https://web.facebook.com/springplazahotel/" target="_blank"><i class="fa fa-facebook fa-fw"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--Footer end-->
    </div>
    <!--End content before Slider-->

    <a href="#page-top" class="scroll-to scroll-up-btn"><i class="fa fa-angle-up"></i></a>

    <!--Room Tabs Gallery Preview Modal start-->
    <div class="modal fade" id="roomTabsGalleryPreviewModal" tabindex="-1" role="dialog" aria-labelledby="roomTabsGalleryPreviewModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-nav">
                <div class="title pull-left"><!-- title via js --></div>
                <button type="button" class="close pull-right" data-dismiss="modal"><span
                    aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                </div>
                <div class="modal-body" id="roomTabsGalleryPreviewModalLabel">
                    <!-- img via js -->
                </div>
            </div>
        </div>
    </div>
    <!--Room Tabs Gallery Preview Modal start-->
    <?php include "InquiryModal.php"; ?>
    <?php include 'ResModal.php'; ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!--Start Style Switcher (remove before upload to Themeforest)-->
    <script src="js/style-switcher.js"></script>
    <!--End Style Switcher (remove before upload to Themeforest)-->

    <script src="bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
    <script src="bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="bower_components/jquery-animatenumber/jquery.animateNumber.min.js"></script>
    <script src="bower_components/bootstrap-3-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


    <script src="js/custom.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#ShowModal").click(function(){
                $("#inquiryModal").modal();
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $("#btnviewres").click(function()
            {
                $("#ResModal").modal('show');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#ShowModal2").click(function(){
                $("#inquiryModal").modal();
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#CancelRes").click(function(){
                $("#inquiryModal2").modal();
            });
        });
    </script>
    <script type="text/javascript">

        $(".AlbumGallery").on('click',function()
        {
            $.ajax(
            {
                type: "POST",
                url: "GetImageFloors.php",
                data:
                {
                    divID: $('.AlbumGallery').val(),
                },
                success: function(response)
                {
                    alert($('.AlbumGallery').val());
                }
            });
        });
    </script>
</body>
</html>