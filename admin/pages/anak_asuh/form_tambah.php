<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Form Tambah Anak Asuh</h3>
						</div>						
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Form Tambah<small>Anak Asuh</small></h2>					
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form method="post" action="../admin/pages/anak_asuh/aksi_simpan.php" class="form-horizontal form-label-left" enctype="multipart/form-data">
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Nama <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="Nama" name="Nama" placeholder="Nama Anak" required="required" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Tempat Lahir <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="TempatLahir" name="TempatLahir" placeholder="Tempat Lahir" required="required" class="form-control">
											</div>
										</div>										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="TanggalLahir" name="TanggalLahir" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
												<script>
													function timeFunctionLong(input) {
														setTimeout(function() {
															input.type = 'text';
														}, 60000);
													}
												</script>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Foto <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" id="Foto" name="Foto" required="required">
											</div>
										</div>	
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Pendidikan <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<select class="select2_single form-control" name="Pendidikan" tabindex="-1">
													<option value="AK">-- Pilih Jenjang Pendidikan --</option>
													<option id="SD" value="SD">SD</option>
													<option id="SMP" value="SMP">SMP</option>
													<option id="SMA" value="SMA">SMA</option>
												</select>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" >Kondisi <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<div class="radio">
													<label>
														<input type="radio"value="Yatim" id="Kondisi" name="Kondisi"> Yatim
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" value="Piatu" id="Kondisi" name="Kondisi"> Piatu
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" value="Kurangmampu" id="Kondisi" name="Kondisi"> Kurang mampu
													</label>
												</div>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Orangtua <span class="required">*</span>
											</label>											
											<div class="col-md-6 col-sm-6 ">
												<select id="Orangtua" name="Orangtua" class="select2_single form-control" tabindex="-1">
													<option value="AK">-- Pilih nama orangtua --</option>
													<?php
					                                    include "../lib/config.php";
					                                    include "../lib/koneksi.php";
					                                    $q = mysqli_query($koneksi, "SELECT * FROM tbl_orangtua");
					                                    while($ortu=mysqli_fetch_array($q)){
				                                    ?>													
													<option value="<?php echo $ortu['id_orangtua']; ?>">
														<?php echo $ortu['nama_orangtua']; ?>
													</option>
													<?php } ?>
												</select>
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