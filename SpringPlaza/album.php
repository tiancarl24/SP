    <!--Room Tabs start-->
    <section class="room-tabs" id="Gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Album Gallery</h2>
                </div>
                <div class="col-md-12">
                    <div class="row room-tabs-info">
                    </div>
                </div>
                <div class="col-md-12">
                    <!--Room Tabs Nav start -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#1floor" aria-controls="1floor" role="tab" data-toggle="tab">First Floor</a></li>
                        <li role="presentation"><a href="#2floor" aria-controls="2floor" role="tab" data-toggle="tab">Second Floor</a></li>
                    </ul>
                    <!--Room Tabs Nav end -->

                    <!-- Tabs start -->
                    <div class="tab-content">
                        <!--Room Tab 1 start-->
                        <div role="tabpanel" class="tab-pane fade in active" id="1floor">
                            <div class="row">
                               <?php  
                               DBOpen();
                               $firstfloor = DBGetData("SELECT * from gallery WHERE Floor = 'First' ");
                               foreach($firstfloor as $firstfloor)
                               {
                                wr("<div class='col-md-3'>");
                                wr("<div class='room-tabs-gallery'>");
                                wr("<div class='room-tabs-gallery-thumbnails'>");
                                wr("<a class='room-tabs-gallery-thumb' href='#1floor'>");
                                wr("<img class='img-responsive' src='../HotelReservation/Gallery/$firstfloor[2]' style='height: 200px;' alt='Gallery Thumbnail' title='The Image Title1'/>");
                                wr("</a>");
                                wr("</div>");
                                wr("<div class='clearfix'></div>");
                                wr("</div>");
                                wr("</div>");
                            }
                            DBClose();
                            ?>
                        </div>
                    </div>
                    <!--Room Tab 1 end-->
                    <!--Room Tab 2 start-->
                    <div role="tabpanel" class="tab-pane fade in" id="2floor">
                        <div class="row">
                               <?php  
                               DBOpen();
                               $Second = DBGetData("SELECT * from gallery WHERE Floor = 'Second' ");
                               foreach($Second as $Second)
                               {
                                wr("<div class='col-md-3'>");
                                wr("<div class='room-tabs-gallery'>");
                                wr("<div class='room-tabs-gallery-thumbnails'>");
                                wr("<a class='room-tabs-gallery-thumb' href='#2floor'>");
                                wr("<img class='img-responsive' src='../HotelReservation/Gallery/$Second[2]' style='height: 200px;' alt='Gallery Thumbnail' title='The Image Title1'/>");
                                wr("</a>");
                                wr("</div>");
                                wr("<div class='clearfix'></div>");
                                wr("</div>");
                                wr("</div>");
                            }
                            DBClose();
                            ?>
                        </div>
                    </div>
                </div>
                <!-- Tabs end -->
            </div>
        </div>
    </div>
</section>
    <!--Room Tabs start-->