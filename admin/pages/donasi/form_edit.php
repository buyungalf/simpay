<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Form Edit Donasi</h3>
						</div>						
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Form Edit<small>Donasi</small></h2>					
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form method="post" action="../admin/pages/donasi/aksi_edit.php" class="form-horizontal form-label-left">
										<?php
				                            include "../lib/config.php";
				                            include "../lib/koneksi.php";
				                            $id_donasi = $_GET['id_donasi'];
				                            $query = mysqli_query($koneksi, "SELECT * FROM tbl_donasi WHERE tbl_donasi.id_donasi='$id_donasi'");
				                            $donasi=mysqli_fetch_array($query);
				                          ?>
				                          <input type="hidden" id="id" name="id" value="<?php echo $id_donasi; ?>">
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Donatur<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<select class="select2_single form-control" id="Nama" name="Nama" tabindex="-1">
													<option selected="<?= $donatur['id_donatur']; ?>" value="AK">-- Nama Donatur --</option>
													<?php
					                                    include "../lib/config.php";
					                                    include "../lib/koneksi.php";
					                                    $q = mysqli_query($koneksi, "SELECT * FROM tbl_donatur");
					                                    while($donatur=mysqli_fetch_array($q)){
				                                    ?>													
													<option value="<?php echo $donatur['id_donatur']; ?>">
														<?php echo $donatur['nama_donatur']; ?>
													</option>
													<?php } ?>
												</select>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Jumlah <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="Jumlah" name="Jumlah" value="<?= $donasi['jml_donasi']; ?>" placeholder="Jumlah Donasi" required="required" class="form-control">
											</div>
										</div>										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Donasi <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="Tanggal" name="Tanggal" value="<?= $donasi['tgl_donasi']; ?>" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
												<script>
													function timeFunctionLong(input) {
														setTimeout(function() {
															input.type = 'text';
														}, 60000);
													}
												</script>
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