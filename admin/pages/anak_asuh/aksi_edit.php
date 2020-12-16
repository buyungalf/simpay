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

	$id_anakasuh = $_POST['id'];
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
					echo "<script> alert('Nama produk tidak boleh kosong!'); window.location = '$admin_url'+'main.php?pages=form_edit_anak_asuh';</script>";
				} else {
					$querySimpan = mysqli_query($koneksi,"UPDATE tbl_anakasuh SET foto_anak='$nama_file', nama_anakasuh='$Nama', tempat_lahir='$TempatLahir', tgl_lahir='$TanggalLahir', pendidikan='$Pendidikan', kondisi='$Kondisi', id_orangtua='$Orangtua' WHERE id_anakasuh='$id_anakasuh'");
					if($querySimpan)
					{
						echo"<script> alert('Data Produk Berhasil Di ubah'); window.location = '$admin_url'+'main.php?pages=anak_asuh'; </script>"; 
					} else {
						echo "<script> alert('Data Produk Gagal Di ubah'); window.location = '$admin_url'+'main.php?pages=form_edit_anak_asuh&id_anakasuh='+'$id_anakasuh';</script>";
					}
				}			
				
			} 
			else 
			{
				echo "<script> alert('Data Gambar Produk Gagal Dimasukkan');  window.location = '$admin_url'+'main.php?pages=form_edit_anak_asuh'; </script>";
			}
		} 
		else 
		{
			echo "<script> alert('Data Gambar Produk Gagal Dimasukkan Karena Ukuran Melebihi 1 MB'); window.location = '$admin_url'+'main.php?pages=form_edit_anak_asuh'; </script>";
		}
	} 
	else 
	{
		echo "<script> alert('Data Gambar Produk Gagal Dimasukkan Karena Tidak Berektensi JPG/JPEG/PNG');</script>";
	}
}
		

?>
