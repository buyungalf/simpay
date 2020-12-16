<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
  echo "<center>Untuk mengakses modul, Anda harus login dulu <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$id_kegiatan=$_GET['id_kegiatan'];
	$queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_kegiatan WHERE id_kegiatan='$id_kegiatan'");

	if($queryHapus){
       echo "<script> alert('Data Kegiatan Berhasil Di hapus'); window.location = '$admin_url'+'main.php?pages=kegiatan';</script>";
    } else {
       echo "<script> alert('Data Kegiatan Gagal Di hapus'); window.location = '$admin_url'+'main.php?pages=kegiatan';</script>"; 
    }
}
?>