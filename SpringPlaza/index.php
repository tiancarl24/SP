<?php 
include "incHeader.php";
include "incAmenities.php"; 
include "utils.php";
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
<section class="location" id="MapLocation">
    <iframe frameborder="0" width="100%" height="500"  src='http://maps.google.com?q=<SpringPlazaHotel>&output=embed'></iframe>
        <div class="location-address text-center">
            <address>Location <i class="icon-pointer"></i> Hotel Spring Plaza | Sampaloc, Dasmariñas, Cavite</address>
        </div>
    </section>
    <!--Location end-->
    <?php include "album.php" ?>
    <section class="about" id="About">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="about-image">
                        <img src="img/about-img.jpg" alt="Owner Image" class="img-responsive"/>
                    </div>
                </div>
                <div class="col-md-8">
                    <h2>About the Hotel</h2>

                    <p>Spring Plaza Hotel is a budget hotel located in the developed city of Dasmarinas City, Cavite. Conveniently located away from the hustle and bustle of the city but close to everything. Only 15 minutes away from Tagaytay and within easy access to two of the cities leading department stores, this is the ideal choice for those wanting for a quiet and private retreat without breaking the bank.</p>
                    <p>We present travellers clean and amazingly affordable rooms. Guests will enjoy the laid back and serene environment of our location.</p>
                </div>
            </div>
        </div>
    </section>
    <!--About end-->
    <!--Address start-->
    <section class="address" id="Contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><img src="img/address-logo.png" alt="Logo"/></h2>
                    <address>Sampaloc, Dasmariñas, Cavite</address>
                    <p class="address-info">If you have questions or need additional information, please call Us:</p>
                    <ul class="phones">
                        <li><i class="fa fa-phone"></i> (02) - 7811540</li>
                        <li><i class="fa fa-mobile"></i> (+63) 932 921 3163</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Address end-->

    <!--Footer start-->
    <footer class="footer" id="sc-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="footer-copyright">
                        &copy; 2018 HotelSpringPlaza. All rights reserved.
                    </p>
                </div>
                <div class="col-md-6">
                    <ul class="footer-social-media">
                        <li><a href="#"><i class="fa fa-twitter fa-fw"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus fa-fw"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook fa-fw"></i></a></li>
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
<?php include "inquiryModal.php"; ?>

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

</body>
</html>