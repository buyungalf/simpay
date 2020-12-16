<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Daftar Anak Asuh</h3>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row" style="display: block;">
              <div class="col">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabel<small>Anak Asuh</small></h2>
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
                    <table class="table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Foto</th>
                          <th>Nama</th>
                          <th>Nama Orang Tua</th>
                          <th>Alamat</th>
                          <th>Pendidikan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            include "../lib/config.php";
                            include "../lib/koneksi.php";
                            $query = mysqli_query($koneksi, "SELECT tbl_anakasuh.*, tbl_orangtua.nama_orangtua, tbl_orangtua.alamat FROM tbl_anakasuh inner join tbl_orangtua on tbl_anakasuh.id_orangtua = tbl_orangtua.id_orangtua");
                            $i=1;
                            while($anak_asuh=mysqli_fetch_array($query)){                              
                          ?>
                        <tr>                          
                          <th scope="row"><?= $i; ?></th>
                          <td>
                            <img src="upload/<?php echo $anak_asuh['foto_anak'];?> " width="100px" height="auto">
                          </td>
                          <td><?= $anak_asuh['nama_anakasuh'] ?></td>
                          <td><?= $anak_asuh['nama_orangtua'] ?></td>
                          <td><?= $anak_asuh['alamat'] ?></td>
                          <td><?= $anak_asuh['pendidikan'] ?></td>
                          <td>
                            <div class="input-group-btn">
                              <a href="<?= $admin_url; ?>main.php?pages=form_edit_anak_asuh&id_anakasuh=<?= $anak_asuh['id_anakasuh']; ?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                              <a href="<?= $admin_url; ?>pages/anak_asuh/aksi_hapus.php?id_anakasuh=<?= $anak_asuh['id_anakasuh']; ?>" class="btn btn-danger"><i class="fa fa-power-off"></i></a>
                            </div>
                          </td>                          
                        </tr>      
                        <?php $i++;} ?>                  
                      </tbody>
                    </table>
                  </div>
                  <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
                      <li>
                        <div class="input-group-btn">
                          <a href="pages/anak_asuh/laporan.php">
                            <button href="index.php" type="button" class="btn btn-success">Laporan</button>
                          </a>
                          <a href="main.php?pages=form_anak_asuh">
                            <button href="index.php" type="button" class="btn btn-primary">Tambah Daftar</button>
                          </a>
                        </div>
                      </li>                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>