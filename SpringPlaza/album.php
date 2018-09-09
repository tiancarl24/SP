    <!--Room Tabs start-->
    <section class="room-tabs" id="Gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Album Gallery</h2>
                    <div class="row">
                        <?php
                        DBOpen();
                        $floor = DBGetData("SELECT * FROM floors GROUP BY floors");
                        foreach($floor as $floor)
                        {
                            wr("<div id='AlbumGallery' class='col-lg-4 AlbumGallery' style='height: 200px; border: solid 1px white; cursor: pointer; background-color: #f68345; color: white;'>");
                            wr("<h4 style='margin-top: 75px;'><center>$floor[1] Floor</center></h4>");
                            wr("<br>");
                            wr(" <h4><center>Album</center></h4>");
                            wr(" <h4><center><i>Click to preview the images</i></center></h4>");
                            wr("</div>");
                        }
                        DBClose();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <form method="POST" action="Function/Function-DeleteUser.php">
        <div class="modal fade AlbumModal" id="AlbumModal" role="dialog" tabindex="-1" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!--Modal header-->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                        <h4 class="modal-title">Discard User</h4>
                    </div>

                    <!--Modal body-->
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <a class="room-tabs-gallery-preview-container" href="#">
                                    <img src="../HotelReservation/Gallery/ac1.jpg" style="width: 100%; height: 200px;" class="room-tabs-gallery-preview">
                                </a>
                            </div>
                        </div>
                    </div>
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
    <script type="text/javascript">
        var AlbumGallery = document.getElementById('AlbumGallery');
        AlbumGallery.onclick = function()
        {
            $("#AlbumModal").modal('show');
        }
    </script>
    <!--Room Tabs start-->