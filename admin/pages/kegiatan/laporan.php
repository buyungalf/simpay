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
$pdf->Cell(45,6,'KEGIATAN',1,0);
$pdf->Cell(40,6,'WAKTU',1,0);
$pdf->Cell(50,6,'NAMA PENGAMPU',1,1);

$pdf->SetFont('Arial','',10);

include "../../../lib/config.php";
include "../../../lib/koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM tbl_kegiatan ORDER BY waktu_kegiatan");
$i=1;
while($kegiatan=mysqli_fetch_array($query)){
	$pdf->Cell(8,6,$i,1,0);
    $pdf->Cell(45,6,$kegiatan['nama_kegiatan'],1,0);
    $pdf->Cell(40,6,$kegiatan['waktu_kegiatan'],1,0);
    $pdf->Cell(50,6,$kegiatan['pengampu'],1,1);
    $i++;
}

$pdf->Output();
?>