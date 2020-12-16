<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
  echo "<center>Untuk mengakses modul, Anda harus login dulu <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$id_donatur = $_POST['id'];
	$Nama = $_POST['Nama'];
	$Alamat = $_POST['Alamat'];
	$NoHP = $_POST['Nohp'];

	$querySimpan = mysqli_query($koneksi,"UPDATE tbl_donatur SET nama_donatur='$Nama', alamat_donatur='$Alamat', no_hp='$NoHP' WHERE id_donatur='$id_donatur'");
	if($querySimpan) {
		echo"<script> alert('Data donatur Berhasil Di ubah'); window.location = '$admin_url'+'main.php?pages=donatur'; </script>"; 
	} else {
		echo "<script> alert('Data donatur Gagal Di ubah'); window.location = '$admin_url'+'main.php?pages=form_donatur&id_donatur='+'$id_donatur';</script>";
	}
	}				
?>