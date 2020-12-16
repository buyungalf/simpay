<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
  echo "<center>Untuk mengakses modul, Anda harus login dulu <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$Uraian = $_POST['Uraian'];
	$Tanggal = $_POST['Tanggal'];
	$Debit = $_POST['Debit'];
	$Kredit = $_POST['Kredit'];
	$Saldo = $_POST['Saldo'];

	$querySimpan = mysqli_query($koneksi,"INSERT INTO tbl_keuangan(uraian, tgl_input, debit, kredit, saldo) VALUES (
	'$Uraian','$Tanggal','$Debit','$Kredit','$Saldo')");
	if($querySimpan) {	
		echo"<script> alert('Data Keuangan Berhasil Masuk'); window.location = '$admin_url'+'main.php?pages=keuangan'; </script>"; 
	} else {
		echo "<script> alert('Data Keuangan Gagal Masuk'); window.location = '$admin_url'+'main.php?pages=form_keuangan';</script>";
	}
}				
?>