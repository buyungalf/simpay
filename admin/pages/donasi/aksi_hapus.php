<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
  echo "<center>Untuk mengakses modul, Anda harus login dulu <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$id_donasi=$_GET['id_donasi'];
	$queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_donasi WHERE id_donasi='$id_donasi'");

	if($queryHapus){
       echo "<script> alert('Data Donasi Berhasil Di hapus'); window.location = '$admin_url'+'main.php?pages=donasi';</script>";
    } else {
       echo "<script> alert('Data Donasi Gagal Di hapus'); window.location = '$admin_url'+'main.php?pages=donasi';</script>"; 
    }
}
?>