<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Daftar Orang tua</h3>
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
                    <h2>Tabel<small>Orang tua</small></h2>
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
                          <th>Nama</th>
                          <th>Pekerjaan</th>
                          <th>Alamat</th>
                          <th>Status</th>
                          <th>No. HP</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            include "../lib/config.php";
                            include "../lib/koneksi.php";
                            $query = mysqli_query($koneksi, "SELECT * FROM tbl_orangtua");
                            $i=1;
                            while($orangtua=mysqli_fetch_array($query)){                              
                          ?>
                        <tr>                          
                          <th scope="row"><?= $i; ?></th>
                          <td><?= $orangtua['nama_orangtua'] ?></td>
                          <td><?= $orangtua['pekerjaan'] ?></td>
                          <td><?= $orangtua['alamat'] ?></td>
                          <td><?= $orangtua['status'] ?></td>
                          <td><?= $orangtua['no_hp'] ?></td>
                          <td>
                            <div class="input-group-btn">
                              <a href="<?= $admin_url; ?>main.php?pages=form_edit_orangtua&id_orangtua=<?= $orangtua['id_orangtua']; ?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                              <a href="<?= $admin_url; ?>pages/orangtua/aksi_hapus.php?id_orangtua=<?= $orangtua['id_orangtua']; ?>" class="btn btn-danger"><i class="fa fa-power-off"></i></a>
                            </div>
                          </td>                          
                        </tr>      
                        <?php $i++;} ?>                  
                      </tbody>
                    </table>
                  </div>
                  <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
                      <div class="input-group-btn">
                      <a href="pages/orangtua/laporan.php">
                        <button href="index.php" type="button" class="btn btn-success">Laporan</button>
                      </a>
                      <a href="main.php?pages=form_orangtua">
                        <button href="index.php" type="button" class="btn btn-primary">Tambah Daftar</button>
                      </a>
                    </div>                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>