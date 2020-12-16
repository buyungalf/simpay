<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
  echo "<center>Untuk mengakses modul, Anda harus login dulu <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$id_keuangan=$_GET['id_keuangan'];
	$queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_keuangan WHERE id_keuangan='$id_keuangan'");

	if($queryHapus){
       echo "<script> alert('Data Orangtua Berhasil Di hapus'); window.location = '$admin_url'+'main.php?pages=keuangan';</script>";
    } else {
       echo "<script> alert('Data Orangtua Gagal Di hapus'); window.location = '$admin_url'+'main.php?pages=keuangan';</script>"; 
    }
}
?>