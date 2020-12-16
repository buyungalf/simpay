<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
  echo "<center>Untuk mengakses modul, Anda harus login dulu <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$id_keuangan = $_POST['id'];
	$Uraian = $_POST['Uraian'];
	$Tanggal = $_POST['Tanggal'];
	$Debit = $_POST['Debit'];
	$Kredit = $_POST['Kredit'];
	$Saldo = $_POST['Saldo'];

	$querySimpan = mysqli_query($koneksi,"UPDATE tbl_keuangan SET uraian='$Uraian', tgl_input='$Tanggal', debit='$Debit', kredit='$Kredit', saldo='$Saldo' WHERE id_keuangan='$id_keuangan'");
	if($querySimpan) {	
		echo"<script> alert('Data Keuangan Berhasil Diubah'); window.location = '$admin_url'+'main.php?pages=keuangan'; </script>"; 
	} else {
		echo "<script> alert('Data Keuangan Gagal Diubah'); window.location = '$admin_url'+'main.php?pages=form_keuangan';</script>";
	}
}				
?>