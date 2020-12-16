<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Form Tambah Orang tua</h3>
						</div>						
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Form Tambah<small>Orang tua</small></h2>					
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form method="post" action="../admin/pages/orangtua/aksi_edit.php" class="form-horizontal form-label-left">

										<?php
				                            include "../lib/config.php";
				                            include "../lib/koneksi.php";
				                            $id_orangtua = $_GET['id_orangtua'];
				                            $query = mysqli_query($koneksi, "SELECT * FROM tbl_orangtua WHERE tbl_orangtua.id_orangtua='$id_orangtua'");
				                            $orangtua=mysqli_fetch_array($query);
				                          ?>
				                          <input type="hidden" id="id" name="id" value="<?php echo $id_orangtua; ?>">
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Nama <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="Nama" name="Nama" value="<?= $orangtua['nama_orangtua'] ?>" placeholder="Nama Orangtua" required="required" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Pekerjaan <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="Pekerjaan" name="Pekerjaan" value="<?= $orangtua['pekerjaan'] ?>" placeholder="Pekerjaan" required="required" class="form-control">
											</div>
										</div>										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="Alamat" name="Alamat" value="<?= $orangtua['alamat'] ?>" placeholder="Alamat" required="required" class="form-control">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Status <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<div class="radio">
													<label>
														<input type="radio" value="Orang Tua" id="Status" name="Status"> Orang Tua
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" value="Wali" id="Status" name="Status"> Wali
													</label>
												</div>
											</div>
										</div>	
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">No. HP <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="Nohp" name="Nohp" value="<?= $orangtua['no_hp'] ?>" placeholder="No. HP" required="required" class="form-control">
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