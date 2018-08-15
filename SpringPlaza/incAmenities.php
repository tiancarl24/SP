
    <!--Features start-->
    <section class="features" id="sc-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>You'll love all the amenities we offer!</h2>
                </div>
            </div>
            <div class="row">
                <?php
                DBOpen();
                $rs = DBGetData(" SELECT * FROM amenities ");
                foreach($rs as $rs)
                {
                    wr("<div class='col-md-3 col-sm-6'>");
                    wr("<div class='feature'>");
                    wr("<div class='feature-icon'>");
                    wr("<i class='icon-speedometer'></i>");
                    wr("</div>");
                    wr("<h3>$rs[1]</h3>");
                    wr("<p>$rs[2]</p>");
                    wr("</div>");
                    wr("</div>");
                }
                DBClose();
                ?>
                <!--Feature 1 start-->
                <!--Feature 1 end-->

                <!--Feature 2 start-->
                <!-- <div class="col-md-3 col-sm-6">
                    <div class="feature">
                        <div class="feature-icon">
                            <i class="icon-disc"></i>
                        </div>
                        <h3>Hifi Sound System</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus.</p>
                    </div>
                </div> -->
                <!--Feature 2 end-->

                <!--Feature 3 start-->
                <!-- <div class="col-md-3 col-sm-6">
                    <div class="feature">
                        <div class="feature-icon">
                            <i class="icon-map"></i>
                        </div>
                        <h3>Ideal Location</h3>

                        <p>Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus auctor fermentum in.</p>
                    </div>
                </div> -->
                <!--Feature 3 end-->

                <!--Feature 4 start-->
                <!-- <div class="col-md-3 col-sm-6">
                    <div class="feature">
                        <div class="feature-icon">
                            <i class="icon-shield"></i>
                        </div>
                        <h3>Security Service</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus.</p>
                    </div>
                </div> -->
                <!--Feature 4 end-->
            </div>
        </div>
    </section>
    <!--Features end-->