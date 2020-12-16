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
									<br/>									
									<form method="post" action="../admin/pages/anak_asuh/aksi_edit.php" class="form-horizontal form-label-left" enctype="multipart/form-data">										
										<?php
				                            include "../lib/config.php";
				                            include "../lib/koneksi.php";
				                            $id_anakasuh = $_GET['id_anakasuh'];
				                            $query = mysqli_query($koneksi, "SELECT tbl_anakasuh.*, tbl_orangtua.nama_orangtua, tbl_orangtua.alamat FROM tbl_anakasuh inner join tbl_orangtua on tbl_anakasuh.id_orangtua = tbl_orangtua.id_orangtua WHERE tbl_anakasuh.id_anakasuh='$id_anakasuh'");
				                            $anak_asuh=mysqli_fetch_array($query);
				                          ?>
				                          <input type="hidden" id="id" name="id" value="<?php echo $id_anakasuh; ?>">
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Nama <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="Nama" name="Nama" value="<?= $anak_asuh['nama_anakasuh'] ?>" placeholder="Nama Anak" required="required" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Tempat Lahir <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="TempatLahir" value="<?= $anak_asuh['tempat_lahir'] ?>" name="TempatLahir" placeholder="Tempat Lahir" required="required" class="form-control">
											</div>
										</div>										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="TanggalLahir" name="TanggalLahir" value="<?= $anak_asuh['tgl_lahir'] ?>" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
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
												<input type="file" value="<?= $anak_asuh['foto_anak'] ?>" id="Foto" name="Foto" required="required">
											</div>
										</div>	
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Pendidikan <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<select class="select2_single form-control" name="Pendidikan" tabindex="-1">
													<option value="<?= $anak_asuh['pendidikan'] ?>">-- Pilih Jenjang Pendidikan --</option>
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
														<input type="radio"id="Kondisi" name="Kondisi"> Yatim
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" id="Kondisi" name="Kondisi"> Piatu
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" id="Kondisi" name="Kondisi"> Kurang mampu
													</label>
												</div>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Orangtua <span class="required">*</span>
											</label>											
											<div class="col-md-6 col-sm-6 ">
												<select id="Orangtua" name="Orangtua" class="select2_single form-control" tabindex="-1">
													<option selected="<?= $anak_asuh['id_orangtua'] ?>">-- Pilih nama orangtua --</option>
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