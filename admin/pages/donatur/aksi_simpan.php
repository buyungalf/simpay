<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
  echo "<center>Untuk mengakses modul, Anda harus login dulu <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$Nama = $_POST['Nama'];
	$Alamat = $_POST['Alamat'];
	$NoHP = $_POST['Nohp'];

	$querySimpan = mysqli_query($koneksi,"INSERT INTO tbl_donatur(nama_donatur, alamat_donatur, no_hp) VALUES (
	'$Nama','$Alamat','$NoHP')");
	if($querySimpan) {
		echo"<script> alert('Data donatur Berhasil Masuk'); window.location = '$admin_url'+'main.php?pages=donatur'; </script>"; 
	} else {
		echo "<script> alert('Data donatur Gagal Masuk'); window.location = '$admin_url'+'main.php?pages=form_donatur';</script>";
	}
	}				
?>