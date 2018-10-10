
<form method="GET" action="ViewReservation.php">
    <?php 
    $RESID = $_SESSION['txtResID'];
    ?>
    <div class="modal fade" id="ResModal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title"></h4>
                </div>
                <!--Modal body-->
                <div class="modal-body">
                    <label style="font-size: 20px">Enter Reservation ID</label>
                    <input type="number" id="txtResID" name="txtResID" style="width: 100%" required="">
                </div>
                <!--Modal footer-->
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                    <button id="btnproceed" name="btnproceed" class="btn btn-primary">Proceed</button>
                </div>
            </div>
        </div>
    </div>
</form>