<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
  echo "<center>Untuk mengakses modul, Anda harus login dulu <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$nama_file = $_FILES['Foto']['name'];
	$ukuran_file = $_FILES['Foto']['size'];
	$tipe_file = $_FILES['Foto']['type'];
	$tmp_file = $_FILES['Foto']['tmp_name'];

	$Nama = $_POST['Nama'];
	$TempatLahir = $_POST['TempatLahir'];
	$TanggalLahir = $_POST['TanggalLahir'];
	$Pendidikan = $_POST['Pendidikan'];
	$Kondisi = $_POST['Kondisi'];
	$Orangtua = $_POST['Orangtua'];
	$path = "../../upload/" . $nama_file;

	
	if($tipe_file == "image/jpeg" || $tipe_file == "image/png")
	{
		if($ukuran_file <= 10000000)
		{
			if(move_uploaded_file($tmp_file, $path))
			{
				if ($Nama=="") {
					echo "<script> alert('Nama produk tidak boleh kosong!'); window.location = '$admin_url'+'main.php?pages=form_anak_asuh';</script>";
				} else {
					$querySimpan = mysqli_query($koneksi,"INSERT INTO tbl_anakasuh(foto_anak, nama_anakasuh, tempat_lahir, tgl_lahir, pendidikan, kondisi, id_orangtua) VALUES (
					'$nama_file','$Nama','$TempatLahir','$TanggalLahir','$Pendidikan','$Kondisi','$Orangtua')");
					if($querySimpan)
					{
						echo"<script> alert('Data Produk Berhasil Masuk'); window.location = '$admin_url'+'main.php?pages=anak_asuh'; </script>"; 
					} else {
						echo "<script> alert('Data Produk Gagal Masuk'); window.location = '$admin_url'+'main.php?pages=form_anak_asuh';</script>";
					}
				}			
				
			} 
			else 
			{
				echo "<script> alert('Data Gambar Produk Gagal Dimasukkan');  window.location = '$admin_url'+'main.php?pages=form_anak_asuh'; </script>";
			}
		} 
		else 
		{
			echo "<script> alert('Data Gambar Produk Gagal Dimasukkan Karena Ukuran Melebihi 1 MB'); window.location = '$admin_url'+'main.php?pages=form_anak_asuh'; </script>";
		}
	} 
	else 
	{
		echo "<script> alert('Data Gambar Produk Gagal Dimasukkan Karena Tidak Berektensi JPG/JPEG/PNG');</script>";
	}
}
		

?>
