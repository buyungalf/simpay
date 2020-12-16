<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
  echo "<center>Untuk mengakses modul, Anda harus login dulu <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$Nama = $_POST['Nama'];
	$Waktu = $_POST['Waktu'];
	$Pengampu = $_POST['Pengampu'];

	$querySimpan = mysqli_query($koneksi,"INSERT INTO tbl_kegiatan(nama_kegiatan, waktu_kegiatan, pengampu) VALUES (
	'$Nama','$Waktu','$Pengampu')");
	if($querySimpan) {
		echo"<script> alert('Data Produk Berhasil Masuk'); window.location = '$admin_url'+'main.php?pages=kegiatan'; </script>"; 
	} else {
		echo "<script> alert('Data Produk Gagal Masuk'); window.location = '$admin_url'+'main.php?pages=form_kegiatan';</script>";
	}
	}				
?>