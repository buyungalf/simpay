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
$pdf->Cell(190,7,'LAPORAN KEUANGAN PANTI ASUHAN YATIM PUTRI `AISYIYAH KAB. MAGELANG',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1,);

$pdf->SetFont('Arial','B',10,);
$pdf->Cell(8,6,'NO',1,0);
$pdf->Cell(25,6,'URAIAN',1,0);
$pdf->Cell(25,6,'TANGGAL',1,0);
$pdf->Cell(35,6,'DEBIT',1,0);
$pdf->Cell(35,6,'KREDIT',1,0);
$pdf->Cell(35,6,'SALDO',1,1);

$pdf->SetFont('Arial','',10);

include "../../../lib/config.php";
include "../../../lib/koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM tbl_keuangan ORDER BY tgl_input");
$i=1;
while($keuangan=mysqli_fetch_array($query)){
	$pdf->Cell(8,6,$i,1,0);
    $pdf->Cell(25,6,$keuangan['uraian'],1,0);
    $pdf->Cell(25,6,$keuangan['tgl_input'],1,0);
    $pdf->Cell(35,6,$keuangan['debit'],1,0);
    $pdf->Cell(35,6,$keuangan['kredit'],1,0);
    $pdf->Cell(35,6,$keuangan['saldo'],1,1); 
    $i++;
}

$pdf->Output();
?>