<?php
// memanggil library FPDF
require('../../../pdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'PANTI ASUHAN YATIM PUTRI `AISYIYAH KAB. MAGELANG',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR ANAK ASUH PANTI ASUHAN YATIM PUTRI `AISYIYAH KAB. MAGELANG',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1,);

$pdf->SetFont('Arial','B',10,);
$pdf->Cell(8,6,'NO',1,0);
$pdf->Cell(20,6,'NAMA',1,0);
$pdf->Cell(40,6,'TANGGAL LAHIR',1,0);
$pdf->Cell(50,6,'NAMA ORANGTUA',1,0);
$pdf->Cell(27,6,'ALAMAT',1,0);
$pdf->Cell(25,6,'PENDIDIKAN',1,1);

$pdf->SetFont('Arial','',10);

include "../../../lib/config.php";
include "../../../lib/koneksi.php";
$query = mysqli_query($koneksi, "SELECT tbl_anakasuh.*, tbl_orangtua.nama_orangtua, tbl_orangtua.alamat FROM tbl_anakasuh inner join tbl_orangtua on tbl_anakasuh.id_orangtua = tbl_orangtua.id_orangtua");
$i=1;
while($anak_asuh=mysqli_fetch_array($query)){
	$pdf->Cell(8,6,$i,1,0);
    $pdf->Cell(20,6,$anak_asuh['nama_anakasuh'],1,0);
    $pdf->Cell(40,6,$anak_asuh['tgl_lahir'],1,0);
    $pdf->Cell(50,6,$anak_asuh['nama_orangtua'],1,0);
    $pdf->Cell(27,6,$anak_asuh['alamat'],1,0);
    $pdf->Cell(25,6,$anak_asuh['pendidikan'],1,1); 
    $i++;
}

$pdf->Output();
?>