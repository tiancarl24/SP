    <!--Room Tabs start-->
    <section class="room-tabs" id="Gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Album Gallery</h2>
                    <div class="row">
                        <?php
                        DBOpen();
                        $floor = DBGetData("SELECT * FROM Floors GROUP BY id");
                        foreach($floor as $floor)
                        {
                            wr("<div id='AlbumGalleryID' class='col-lg-4' style='height: auto; border: solid 1px white; padding-bottom: 20px;  background-color: #f68345; color: white;'>");
                            wr("<br>");
                            wr("<h4><center>$floor[1] Floor</center></h4>");
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
                        wr("</div>");
                        wr("</div>");
                        wr("</div>");
                        wr("</div>");
                        wr("<section>");
                        DBClose();
                        ?>
                        <form method="POST">
                            <div class="modal fade AlbumModal" id="AlbumModal" role="dialog" tabindex="-1" aria-labelledby="" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                        <!--Modal header-->
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                                            <h4 class="modal-title">Album Gallery</h4>
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