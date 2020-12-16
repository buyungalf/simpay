<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
  echo "<center>Untuk mengakses modul, Anda harus login dulu <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$id_orangtua=$_GET['id_orangtua'];
	$queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_orangtua WHERE id_orangtua='$id_orangtua'");

	if($queryHapus){
       echo "<script> alert('Data Orangtua Berhasil Di hapus'); window.location = '$admin_url'+'main.php?pages=orangtua';</script>";
    } else {
       echo "<script> alert('Data Orangtua Gagal Di hapus'); window.location = '$admin_url'+'main.php?pages=orangtua';</script>"; 
    }
}
?>