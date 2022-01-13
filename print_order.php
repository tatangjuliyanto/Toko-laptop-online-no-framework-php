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
$pdf->Cell(20,6,'Pembeli',1,0);
$pdf->Cell(50,6,'Barang',1,0);
$pdf->Cell(25,6,'Hp',1,0);
$pdf->Cell(50,6,'Alamat',1,0);
$pdf->Cell(30,6,'Email',1,1);
$pdf->SetFont('Arial','',10);
include 'koneksi.php';
$mahasiswa = mysqli_query($con, "select * from tb_order");
while ($row = mysqli_fetch_array($mahasiswa)){
 $pdf->Cell(20,6,$row['nama_pembeli'],1,0);
 $pdf->Cell(50,6,$row['nama_barang'],1,0);
 $pdf->Cell(25,6,$row['no_hp'],1,0);
 $pdf->Cell(50,6,$row['alamat'],1,0);
 $pdf->Cell(30,6,$row['email'],1,1);
}
$pdf->Output();
?>
