<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
  echo "<center>Untuk mengakses modul, Anda harus login dulu <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$id_orangtua = $_POST['id'];
	$Nama = $_POST['Nama'];
	$Pekerjaan = $_POST['Pekerjaan'];
	$Alamat = $_POST['Alamat'];
	$Status = $_POST['Status'];
	$NoHP = $_POST['Nohp'];

	$querySimpan = mysqli_query($koneksi,"UPDATE tbl_orangtua SET nama_orangtua='$Nama', pekerjaan='$Pekerjaan', alamat='$Alamat', status='$Status', no_hp='$NoHP' WHERE id_orangtua='$id_orangtua'");
	if($querySimpan) {
		echo"<script> alert('Data Produk Berhasil Di ubah'); window.location = '$admin_url'+'main.php?pages=orangtua'; </script>"; 
	} else {
		echo "<script> alert('Data Produk Gagal Di ubah'); window.location = '$admin_url'+'main.php?pages=form_edit_orangtua&id_orangtua='+'$id_orangtua';</script>";
	}
	}				
?>