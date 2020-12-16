<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Form Tambah Donatur</h3>
						</div>						
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Form Tambah<small>Donatur</small></h2>					
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form method="post" action="../admin/pages/donatur/aksi_edit.php" class="form-horizontal form-label-left">
										<?php
				                            include "../lib/config.php";
				                            include "../lib/koneksi.php";
				                            $id_donatur = $_GET['id_donatur'];
				                            $query = mysqli_query($koneksi, "SELECT * FROM tbl_donatur WHERE tbl_donatur.id_donatur='$id_donatur'");
				                            $donatur=mysqli_fetch_array($query);
				                          ?>
				                          <input type="hidden" id="id" name="id" value="<?php echo $id_donatur; ?>">
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Nama <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="Nama" name="Nama" value="<?= $donatur['nama_donatur'] ?>" placeholder="Nama Donatur" required="required" class="form-control ">
											</div>
										</div>									
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="Alamat" name="Alamat" value="<?= $donatur['alamat_donatur'] ?>" placeholder="Alamat" required="required" class="form-control">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">No. HP <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="Nohp" name="Nohp" value="<?= $donatur['no_hp'] ?>" placeholder="No. HP" required="required" class="form-control">
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