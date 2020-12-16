<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
  echo "<center>Untuk mengakses modul, Anda harus login dulu <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$id_anakasuh=$_GET['id_anakasuh'];
	$queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_anakasuh WHERE id_anakasuh='$id_anakasuh'");

	if($queryHapus){
       echo "<script> alert('Data Produk Berhasil Di hapus'); window.location = '$admin_url'+'main.php?pages=anak_asuh';</script>";
    } else {
       echo "<script> alert('Data Produk Gagal Di hapus'); window.location = '$admin_url'+'main.php?pages=anak_asuh';</script>"; 
    }
}
?>