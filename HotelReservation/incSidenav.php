<nav id="mainnav-container">
  <div id="mainnav">

    <!--Menu-->
    <div id="mainnav-menu-wrap">
      <div class="nano">
        <div class="nano-content">
          <!--Profile Widget-->
          <div id="mainnav-profile" class="mainnav-profile">
            <div class="profile-wrap">
              <div class="pad-btm">
                <img class="img-circle img-sm img-border" src="Library/img/profile-photos/1.png" alt="Profile Picture">
              </div>
              <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                <span class="pull-right dropdown-toggle">
                  <i class="dropdown-caret"></i>
                </span>
                <p class="mnp-name"><?php echo $_SESSION['HotelReservation.name'] ?></p>
                <label class="mnp-desc"><?php echo $_SESSION['HotelReservation.email']; ?></label>
              </a>
            </div>
            <div id="profile-nav" class="collapse list-group bg-trans">
              <!-- <a href="Function/Backup.php" class="list-group-item">
                <i class="demo-pli-gear icon-lg icon-fw"></i> Backup Database
              </a> -->
              <a href="logout.php" class="list-group-item">
                <i class="demo-pli-unlock icon-lg icon-fw"></i> Logout
              </a>
            </div>
          </div>
          <ul id="mainnav-menu" class="list-group">

            <!--Category name-->
            <li class="list-header">Navigation</li>
            <li class="">
                  <a href="home.php">
                    <i class="fa fa-users"></i>
                    <span class="menu-title">
                      <strong>Dashboard</strong>
                    </span>
                  </a>
                </li> 

            <!--Menu list item-->
            <li class="">
              <a href="">
                <i class="fa fa-sort-desc"></i>
                <span class="menu-title">
                  <strong>Content Management</strong>
                </span>
              </a>
              <ul>
                <li class="">
                  <a href="Gallery.php">
                    <i class="fa fa-users"></i>
                    <span class="menu-title">
                      <strong>Gallery</strong>
                    </span>
                  </a>
                </li> 
                <li class="">
                  <a href="Carousel.php">
                    <i class="fa fa-users"></i>
                    <span class="menu-title">
                      <strong>Carousel</strong>
                    </span>
                  </a>
                </li> 
                <li class="">
                  <a href="Amenities.php">
                    <i class="fa fa-users"></i>
                    <span class="menu-title">
                      <strong>Amenities</strong>
                    </span>
                  </a>
                </li>
                <li class="">
                  <a href="About.php">
                    <i class="fa fa-users"></i>
                    <span class="menu-title">
                      <strong>About</strong>
                    </span>
                  </a>
                </li>
                <li class="">
                  <a href="Contact.php">
                    <i class="fa fa-users"></i>
                    <span class="menu-title">
                      <strong>Contact</strong>
                    </span>
                  </a>
                </li>
              </ul>
            </li>  

            <li class="">
              <a href="Rooms.php">
                <i class="fa fa-users"></i>
                <span class="menu-title">
                  <strong>Rooms</strong>
                </span>
              </a>
            </li> 
            <li class="">
              <a href="Floors.php">
                <i class="fa fa-users"></i>
                <span class="menu-title">
                  <strong>Floors</strong>
                </span>
              </a>
            </li>  
            <li class="">
              <a href="Accounts.php">
                <i class="fa fa-users"></i>
                <span class="menu-title">
                  <strong>Accounts</strong>
                </span>
              </a>
            </li>
            <li class="">
              <a href="#">
                <i class="fa fa-users"></i>
                <span class="menu-title">
                  <strong>Reservations</strong>
                </span>
                <i class="fa fa-sort-desc"></i>
              </a>
              <ul>
                <li class="">
                  <a href="Reservations.php">
                    <i class="fa fa-users"></i>
                    <span class="menu-title">
                      <strong>Pending</strong>
                    </span>
                  </a>
                </li>
                <li class="">
                  <a href="ApprovedReservations.php">
                    <i class="fa fa-users"></i>
                    <span class="menu-title">
                      <strong>Approved</strong>
                    </span>
                  </a>
                </li>
                <li class="">
                  <a href="DisapprovedReservations.php">
                    <i class="fa fa-users"></i>
                    <span class="menu-title">
                      <strong>Disapproved</strong>
                    </span>
                  </a>
                </li> 
                <li class="">
                  <a href="CheckinReservation.php">
                    <i class="fa fa-users"></i>
                    <span class="menu-title">
                      <strong>Check-in</strong>
                    </span>
                  </a>
                </li> 
                <li class="">
                  <a href="CheckoutReservation.php">
                    <i class="fa fa-users"></i>
                    <span class="menu-title">
                      <strong>Check-out</strong>
                    </span>
                  </a>
                </li> 
              </ul>
            </li>  
            <li class="">
              <a href="Reports.php">
                <i class="fa fa-users"></i>
                <span class="menu-title">
                  <strong>Reports</strong>
                </span>
              </a>
            </li>  
            <!--Menu list item-->
           <!--  <li>
              <a href="#">
                <i class="fa fa-folder-open"></i>
                <span class="menu-title">Authorizer</span>
                <i class="arrow"></i>
              </a>
              <ul class="collapse">
                <li><a href="PendingMember.php"><i class="fa fa-file-text"></i>Pending</a></li>
                <li><a href="ApprovedMember.php"><i class="fa fa-check-square-o"></i>Approved</a></li>
                <li><a href="DiscardedMember.php"><i class="fa fa-times"></i>Discarded</a></li>
                <li><a href="InactiveMember.php"><i class="fa fa-archive"></i>Inactive</a></li>
              </ul>
            </li>  -->                  
          </ul>
        </div>
      </nav>