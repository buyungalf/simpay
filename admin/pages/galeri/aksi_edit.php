<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
  echo "<center>Untuk mengakses modul, Anda harus login dulu <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$nama_file = $_FILES['Gambar']['name'];
	$ukuran_file = $_FILES['Gambar']['size'];
	$tipe_file = $_FILES['Gambar']['type'];
	$tmp_file = $_FILES['Gambar']['tmp_name'];

	$id_galeri = $_POST['id'];
	$Judul = $_POST['Judul'];
	$Deskripsi = $_POST['Deskripsi'];
	$path = "../../upload/" . $nama_file;

	
	if($tipe_file == "image/jpeg" || $tipe_file == "image/png")
	{
		if($ukuran_file <= 10000000)
		{
			if(move_uploaded_file($tmp_file, $path))
			{
				if ($Judul=="") {
					echo "<script> alert('Nama produk tidak boleh kosong!'); window.location = '$admin_url'+'main.php?pages=form_galeri';</script>";
				} else {
					$querySimpan = mysqli_query($koneksi,"UPDATE tbl_anakasuh SET gambar='$nama_file', judul='$Judul', deksripsi='$Deskripsi' WHERE id_galeri='$id_galeri'");
					if($querySimpan)
					{
						echo"<script> alert('Data Galeri Berhasil Masuk'); window.location = '$admin_url'+'main.php?pages=galeri'; </script>"; 
					} else {
						echo "<script> alert('Data Galeri Gagal Masuk'); window.location = '$admin_url'+'main.php?pages=form_galeri';</script>";
					}
				}			
				
			} 
			else 
			{
				echo "<script> alert('Data Gambar Galeri Gagal Dimasukkan');  window.location = '$admin_url'+'main.php?pages=form_galeri'; </script>";
			}
		} 
		else 
		{
			echo "<script> alert('Data Gambar Galeri Gagal Dimasukkan Karena Ukuran Melebihi 1 MB'); window.location = '$admin_url'+'main.php?pages=form_galeri'; </script>";
		}
	} 
	else 
	{
		echo "<script> alert('Data Gambar Galeri Gagal Dimasukkan Karena Tidak Berektensi JPG/JPEG/PNG');</script>";
	}
}
		

?>
