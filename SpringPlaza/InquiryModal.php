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

<script type="text/javascript">

    var dtCheckOUT = document.getElementById('dtCheckOUT');
    dtCheckOUT.onchange = function()
    {
        if(dtCheckIN.value == "")
        {
            alert("Please select check in date first");
            dtCheckOUT.value = "mm/dd/yyyy";
        }

        if(dtCheckOUT.value < dtCheckIN.value)
        {
            alert("Checkout date is invalid")
            dtCheckOUT.value = "mm/dd/yyyy";
        }
        
         if(dtCheckOUT.value == dtCheckIN.value)
        {
            dtCheckIN.value = "";
            alert("Invalid Check out Date")
        }
    }
</script>

<script type="text/javascript">
    
    var dtCheckIN = document.getElementById('dtCheckIN');
    dtCheckIN.onchange = function()
    {
        dtCheckOUT.value = "";
    }
</script>
