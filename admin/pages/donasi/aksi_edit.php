<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
  echo "<center>Untuk mengakses modul, Anda harus login dulu <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$id_donasi = $_POST['id'];
	$Nama = $_POST['Nama'];
	$Jumlah = $_POST['Jumlah'];
	$Tanggal = $_POST['Tanggal'];

	$querySimpan = mysqli_query($koneksi,"UPDATE tbl_donasi SET jml_donasi='$Jumlah', tgl_donasi='$Tanggal', id_donatur='$Nama' WHERE id_donasi='$id_donasi'");
	if($querySimpan) {
		echo"<script> alert('Data Produk Berhasil Di ubah'); window.location = '$admin_url'+'main.php?pages=donasi'; </script>"; 
	} else {
		echo "<script> alert('Data Produk Gagal Di ubah'); window.location = '$admin_url'+'main.php?pages=form_donasi&id_donasi='+';</script>";
	}
	}				
?>