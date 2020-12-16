<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
  echo "<center>Untuk mengakses modul, Anda harus login dulu <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$Nama = $_POST['Nama'];
	$Pekerjaan = $_POST['Pekerjaan'];
	$Alamat = $_POST['Alamat'];
	$Status = $_POST['Status'];
	$NoHP = $_POST['Nohp'];

	$querySimpan = mysqli_query($koneksi,"INSERT INTO tbl_orangtua(nama_orangtua, pekerjaan, alamat, status, no_hp) VALUES (
	'$Nama','$Pekerjaan','$Alamat','$Status','$NoHP')");
	if($querySimpan) {
		echo"<script> alert('Data Produk Berhasil Masuk'); window.location = '$admin_url'+'main.php?pages=orangtua'; </script>"; 
	} else {
		echo "<script> alert('Data Produk Gagal Masuk'); window.location = '$admin_url'+'main.php?pages=form_orangtua';</script>";
	}
	}				
?>