<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
  echo "<center>Untuk mengakses modul, Anda harus login dulu <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$id_donatur=$_GET['id_donatur'];
	$queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_donatur WHERE id_donatur='$id_donatur'");

	if($queryHapus){
       echo "<script> alert('Data Orangtua Berhasil Di hapus'); window.location = '$admin_url'+'main.php?pages=donatur';</script>";
    } else {
       echo "<script> alert('Data Orangtua Gagal Di hapus'); window.location = '$admin_url'+'main.php?pages=donatur';</script>"; 
    }
}
?>