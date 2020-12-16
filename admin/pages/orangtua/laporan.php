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
$pdf->Cell(190,7,'DAFTAR ORANG TUA ANAK ASUH PAY PUTRI `AISYIYAH KAB. MAGELANG',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1,);

$pdf->SetFont('Arial','B',10,);
$pdf->Cell(8,6,'NO',1,0);
$pdf->Cell(60,6,'NAMA ORANGTUA',1,0);
$pdf->Cell(40,6,'PEKERJAAN',1,0);
$pdf->Cell(50,6,'ALAMAT',1,0);
$pdf->Cell(27,6,'STATUS',1,1);

$pdf->SetFont('Arial','',10);

include "../../../lib/config.php";
include "../../../lib/koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM tbl_orangtua");
$i=1;
while($orangtua=mysqli_fetch_array($query)){
	$pdf->Cell(8,6,$i,1,0);
    $pdf->Cell(60,6,$orangtua['nama_orangtua'],1,0);
    $pdf->Cell(40,6,$orangtua['pekerjaan'],1,0);
    $pdf->Cell(50,6,$orangtua['alamat'],1,0);
    $pdf->Cell(27,6,$orangtua['status'],1,1); 
    $i++;
}

$pdf->Output();
?>