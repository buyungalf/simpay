<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Form Tambah Galeri</h3>
						</div>						
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Form Tambah<small>Galeri</small></h2>					
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form method="post" action="../admin/pages/galeri/aksi_simpan.php" class="form-horizontal form-label-left"enctype="multipart/form-data">

										<?php
				                            include "../lib/config.php";
				                            include "../lib/koneksi.php";
				                            $id_galeri = $_GET['id_galeri'];
				                            $query = mysqli_query($koneksi, "SELECT * FROM tbl_galeri WHERE tbl_galeri.id_galeri='$id_galeri'");
				                            $galeri=mysqli_fetch_array($query);
				                          ?>
				                          <input type="hidden" id="id" name="id" value="<?php echo $galeri['id_galeri']; ?>">
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Judul <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="Judul" name="Judul" value="<?= $galeri['judul']; ?>" placeholder="Judul" required="required" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Deskripsi <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="Deskripsi" name="Deskripsi" value="<?= $galeri['deskripsi']; ?>" placeholder="Deskripsi Gambar" required="required" class="form-control">
											</div>
										</div>										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Gambar <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" id="Gambar" name="Gambar" value="<?= $galeri['gambar']; ?>" placeholder="Gambar" required="required">
											</div>
										</div>																								
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-5">
												<button class="btn btn-primary" type="button">Cancel</button>
												<button class="btn btn-primary" type="reset">Reset</button>
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page content -->