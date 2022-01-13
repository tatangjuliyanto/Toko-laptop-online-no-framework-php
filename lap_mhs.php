<?php
// memanggil library FPDF
require('fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string
$pdf->Cell(190,7,'Website Toko Online',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR Pengunjung Toko Online',0,1,'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'ID',1,0);
$pdf->Cell(50,6,'NAMA Pengunjung',1,0);
$pdf->Cell(25,6,'J KEL',1,0);
$pdf->Cell(50,6,'NO HP',1,0);
$pdf->Cell(30,6,'ALAMAT',1,1);
$pdf->SetFont('Arial','',10);
include 'koneksi.php';
$mahasiswa = mysqli_query($con, "select * from db_pembeli");
while ($row = mysqli_fetch_array($mahasiswa)){
 $pdf->Cell(20,6,$row['id'],1,0);
 $pdf->Cell(50,6,$row['nama'],1,0);
 $pdf->Cell(25,6,$row['Jenis_kelamin'],1,0);
 $pdf->Cell(50,6,$row['no_hp'],1,0);
 $pdf->Cell(30,6,$row['alamat'],1,1);
}
$pdf->Output();
?>
