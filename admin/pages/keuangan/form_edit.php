<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Form Tambah Keuangan</h3>
						</div>						
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Form Tambah<small>Keuangan</small></h2>					
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form method="post" action="../admin/pages/keuangan/aksi_edit.php" class="form-horizontal form-label-left">

										<?php
				                            include "../lib/config.php";
				                            include "../lib/koneksi.php";
				                            $id_keuangan = $_GET['id_keuangan'];
				                            $query = mysqli_query($koneksi, "SELECT * FROM tbl_keuangan WHERE tbl_keuangan.id_keuangan='$id_keuangan'");
				                            $keuangan=mysqli_fetch_array($query);
				                          ?>
				                          <input type="hidden" id="id" name="id" value="<?php echo $id_keuangan; ?>">
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Uraian <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="Uraian" name="Uraian" placeholder="Uraian" value="<?= $keuangan['uraian']; ?>" required="required" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="Tanggal" name="Tanggal" value="<?= $keuangan['tgl_input']; ?>" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
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
											<label class="col-form-label col-md-3 col-sm-3 label-align">Debit <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="Debit" name="Debit" value="<?= $keuangan['debit']; ?>" placeholder="Debit" required="required" class="form-control">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Kredit <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="Kredit" name="Kredit" value="<?= $keuangan['kredit']; ?>" placeholder="Kredit" required="required" class="form-control">
											</div>
										</div>	
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Saldo <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="Saldo" name="Saldo" value="<?= $keuangan['saldo']; ?>" placeholder="Saldo" required="required" class="form-control">
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