<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
  echo "<center>Untuk mengakses modul, Anda harus login dulu <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$id_kegiatan = $_POST['id'];
	$Nama = $_POST['Nama'];
	$Waktu = $_POST['Waktu'];
	$Pengampu = $_POST['Pengampu'];

	$querySimpan = mysqli_query($koneksi,"UPDATE tbl_kegiatan SET nama_kegiatan='$Nama', waktu_kegiatan='$Waktu', pengampu='$Pengampu' WHERE id_kegiatan='$id_kegiatan'");
	if($querySimpan) {
		echo"<script> alert('Data Produk Berhasil Di ubah'); window.location = '$admin_url'+'main.php?pages=kegiatan'; </script>"; 
	} else {
		echo "<script> alert('Data Produk Gagal Di ubah'); window.location = '$admin_url'+'main.php?pages=form_kegiatan&id_kegiatan='+'$id_kegiatan';</script>";
	}
	}				
?>