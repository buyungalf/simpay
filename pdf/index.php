<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUSAN NEEGRI 2 LANGSA',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'NIM',1,0);
$pdf->Cell(85,6,'NAMA MAHASISWA',1,0);
$pdf->Cell(27,6,'NO HP',1,0);
$pdf->Cell(25,6,'TANGGAL LHR',1,1);

$pdf->SetFont('Arial','',10);

include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT tbl_anakasuh.*, tbl_orangtua.nama_orangtua, tbl_orangtua.alamat FROM tbl_anakasuh inner join tbl_orangtua on tbl_anakasuh.id_orangtua = tbl_orangtua.id_orangtua");
$i=1;
while($anak_asuh=mysqli_fetch_array($query)){
	
    $pdf->Cell(20,6,$anak_asuh['nama_anakasuh'],1,0);
    $pdf->Cell(85,6,$anak_asuh['tempat_lahir'],1,0);
    $pdf->Cell(27,6,$anak_asuh['alamat'],1,0);
    $pdf->Cell(25,6,$anak_asuh['pendidikan'],1,1); 
}

$pdf->Output();
?>