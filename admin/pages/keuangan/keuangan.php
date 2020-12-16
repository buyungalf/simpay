<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Daftar Keuangan</h3>
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
                    <h2>Tabel<small>Keuangan</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><i class="fa fa-chevron-up"></i></a>
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
                  <div class="table-responsive">
                    <table class="table table-striped jambo_table">
                      <thead>
                        <tr class="headings">                            
                          <th class="column-title">Uraian </th>
                          <th class="column-title">Tanggal </th>
                          <th class="column-title">Debit </th>
                          <th class="column-title">Kredit </th>
                          <th class="column-title">Saldo </th>
                          <th class="column-title no-link last"><span class="nobr">Action</span>
                          </th>
                          <th class="bulk-actions" colspan="7">
                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            include "../lib/config.php";
                            include "../lib/koneksi.php";
                            $query = mysqli_query($koneksi, "SELECT * FROM tbl_keuangan");
                            $i=1;
                            while($keuangan=mysqli_fetch_array($query)){                              
                          ?>
                        <tr class="even pointer">
                          <td class=" "><?= $keuangan['uraian'] ?></td>
                          <td class=" "><?= $keuangan['tgl_input'] ?></td>
                          <td class="a-right a-right "><?= $keuangan['debit'] ?></i></td>
                          <td class="a-right a-right "><?= $keuangan['kredit'] ?></td>
                          <td class="a-right a-right "><?= $keuangan['saldo'] ?> <i class="success fa fa-long-arrow-up"></td>
                          <td class=" last"><a href="#">View</a>
                          </td>
                        </tr>
                        <?php } ?>                         
                      </tbody>
                    </table>
                  </div>
                  <ul class="nav navbar-right panel_toolbox">
                    <div class="input-group-btn">
                      <a href="pages/keuangan/laporan.php">
                        <button href="index.php" type="button" class="btn btn-success">Laporan</button>
                      </a>
                      <a href="main.php?pages=form_keuangan">
                        <button href="index.php" type="button" class="btn btn-primary">Tambah Daftar</button>
                      </a>
                    </div>                      
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>