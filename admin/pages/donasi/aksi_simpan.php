<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
  echo "<center>Untuk mengakses modul, Anda harus login dulu <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$Nama = $_POST['Nama'];
	$Jumlah = $_POST['Jumlah'];
	$Tanggal = $_POST['Tanggal'];

	$querySimpan = mysqli_query($koneksi,"INSERT INTO tbl_donasi(jml_donasi, tgl_donasi, id_donatur) VALUES (
	'$Jumlah','$Tanggal','$Nama')");
	if($querySimpan) {
		echo"<script> alert('Data Produk Berhasil Masuk'); window.location = '$admin_url'+'main.php?pages=donasi'; </script>"; 
	} else {
		echo "<script> alert('Data Produk Gagal Masuk'); window.location = '$admin_url'+'main.php?pages=form_donasi';</script>";
	}
	}				
?>