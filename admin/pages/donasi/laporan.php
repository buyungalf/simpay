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
$pdf->Cell(190,7,'DAFTAR DONASI PANTI ASUHAN YATIM PUTRI `AISYIYAH KAB. MAGELANG',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1,);

$pdf->SetFont('Arial','B',10,);
$pdf->Cell(8,6,'NO',1,0);
$pdf->Cell(40,6,'NAMA DONATUR',1,0);
$pdf->Cell(35,6,'TANGGAL DONASI',1,0);
$pdf->Cell(50,6,'JUMLAH DONASI',1,1);

$pdf->SetFont('Arial','',10);

include "../../../lib/config.php";
include "../../../lib/koneksi.php";
$query = mysqli_query($koneksi, "SELECT tbl_donasi.*, tbl_donatur.nama_donatur FROM tbl_donatur inner join tbl_donasi ON tbl_donasi.id_donatur = tbl_donatur.id_donatur ORDER BY tbl_donasi.tgl_donasi");
$i=1;
while($donasi=mysqli_fetch_array($query)){
	$pdf->Cell(8,6,$i,1,0);
    $pdf->Cell(40,6,$donasi['nama_donatur'],1,0);
    $pdf->Cell(35,6,$donasi['tgl_donasi'],1,0);
    $pdf->Cell(50,6,$donasi['jml_donasi'],1,1);
    $i++;
}

$pdf->Output();
?>