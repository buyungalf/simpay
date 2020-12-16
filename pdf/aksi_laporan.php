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
$anak_asuh = mysqli_query($connect, "select * from anak_asuh");
while ($row = mysqli_fetch_array($anak_asuh)){
    $pdf->Cell(20,6,$row['nama_anakasuh'],1,0);
    $pdf->Cell(85,6,$row['nama_orangtua'],1,0);
    $pdf->Cell(27,6,$row['alamat'],1,0);
    $pdf->Cell(25,6,$row['pendidikan'],1,1); 
}

$pdf->Output();
?>