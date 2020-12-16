
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>PATRIA</a>
            </div>

            <div class="clearfix"></div>
            <?php
              include "../lib/config.php";
              include "../lib/koneksi.php";
              $username = $_SESSION['namauser'];
              $query = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username='$username'");
              $user=mysqli_fetch_array($query);
            ?>
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="upload/<?= $user['foto_user'] ?>" alt="" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?= $user['nama']; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Utama</h3>
                <ul class="nav side-menu">
                  <li><a href="main.php?pages=home"><i class="fa fa-home"></i> Home </a>
                  </li>
                  <li><a href="main.php?pages=anak_asuh"><i class="fa fa-user"></i> Anak Asuh </a>
                  </li>
                  <li><a href="main.php?pages=orangtua"><i class="fa fa-group"></i> Orangtua / Wali </a>
                  </li>
                  <li><a href="main.php?pages=kegiatan"><i class="fa fa-calendar"></i> Kegiatan </a>
                  </li>
                  </li>
                  <li><a href="main.php?pages=donatur"><i class="fa fa-user"></i> Donatur </a>
                  </li>
                  </li>
                  <li><a href="main.php?pages=donasi"><i class="fa fa-money"></i> Donasi </a>
                  </li>  
                  </li>
                  <li><a href="main.php?pages=galeri"><i class="fa fa-file-image-o"></i> Galeri </a>
                  </li>                           
                </ul>
              </div>
              <div class="menu_section">
                <h3>Keuangan</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-money"></i> Keuangan </a>
                    <ul class="nav child_menu">
                      <li><a href="main.php?pages=keuangan">Keuangan</a></li>
                    </ul>
                  </li>                  
                </ul>
              </div>

              <div class="menu_section">
                <h3>Owner</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-settings"></i> Setting </a>
                    <ul class="nav child_menu">
                      <li><a href="main.php?pages=galeri">E-commerce</a></li>
                    </ul>
                  </li>                  
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="upload/<?= $user['foto_user'] ?>" alt=""><?= $user['nama']; ?>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="profile.php"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="asset/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="asset/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="asset/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="asset/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
