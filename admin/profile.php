<?php
include "../lib/config.php";
session_start();
if(empty($_SESSION['username']) && empty($_SESSION['passuser'])){
    echo "<center>Untuk mengakses modul, Anda harus login <br>";
    echo "<a href=$admin_url><b>LOGIN</b></a></center>";
} else {
    include "template/header.php";
    include "template/sidebar.php"; ?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>User Profile</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>User Report <small>Activity report</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <?php
                    include "../lib/config.php";
                    include "../lib/koneksi.php";
                    $username = $_SESSION['namauser'];
                    $query = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username='$username'");
                    $user=mysqli_fetch_array($query);
                  ?>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3  profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="upload/<?= $user['foto_user'] ?>" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3><?= $user['nama']; ?></h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> <?= $user['alamat']; ?>
                        </li>
                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i>
                          <?php 
                          if ($user['level_user']=="AD") {
                            echo " Admin";
                          } elseif ($user['level_user']=="BH") {
                            echo " Bendahara";
                          } ?>
                        </li>
                        <li><i class="fa fa-phone user-profile-icon"></i> <?= $user['no_hp']; ?>
                        </li>
                      </ul>

                    </div>
                    <div class="col-md-9 col-sm-9 ">
                      <div class="col-md-8 ">
                        <div class="x_panel">
                          <div class="x_title">
                            <h2>Form Basic Elements <small>different form elements</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                              </li>
                              <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="#">Settings 1</a>
                                  <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                              </li>
                              <li><a class="close-link"><i class="fa fa-close"></i></a>
                              </li>
                            </ul>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <br />
                            <form class="form-horizontal form-label-left">

                              <div class="form-group row ">
                                <label class="control-label col-md-3 col-sm-3 ">Username</label>
                                <div class="col-md-9 col-sm-9 ">
                                  <input type="text" class="form-control" value="<?= $user['username']; ?>" placeholder="Default Input" disabled="disabled">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Password </label>
                                <div class="col-md-9 col-sm-9 ">
                                  <input type="password" class="form-control" value="<?= $user['password']; ?>" disabled="disabled" placeholder="Disabled Input" value="passwordonetwo">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Foto </label>
                                <div class="col-md-9 col-sm-9 ">
                                  <input type="file" value="<?= $user['foto_user']; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Nama Lengkap <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 ">
                                  <input type="text" class="form-control" value="<?= $user['nama']; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">Alamat</label>
                                <div class="col-md-9 col-sm-9 ">
                                  <input type="text" class="form-control" value="<?= $user['alamat']; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 ">No Handphone</label>
                                <div class="col-md-9 col-sm-9 ">
                                  <input type="text" class="form-control" value="<?= $user['no_hp']; ?>">
                                </div>
                              </div>                    



                              <div class="ln_solid"></div>
                              <div class="form-group">
                                <div class="col-md-9 col-sm-9  offset-md-10">
                                  <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                              </div>

                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        <?php 
        include "template/footer.php";
}

?>