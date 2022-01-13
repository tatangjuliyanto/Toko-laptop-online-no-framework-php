<?php
include "koneksi.php";
header('Content-Type: text/xml');
$query = "SELECT * FROM tb_order";
$hasil = mysqli_query($con,$query);
$jumField = mysqli_num_fields($hasil);
echo "<?xml version='1.0'?>";
echo "<data>";
while ($data = mysqli_fetch_array($hasil))
{
 echo "<Toko_Online>";
 echo"<id_order>",$data['id_order'],"</id_order>";
 echo"<nama_barang>",$data['nama_barang'],"</nama_barang>";
 echo"<nama_pembeli>",$data['nama_pembeli'],"</nama_pembeli>";
 echo"<jenis_kelamin>",$data['jenis_kelamin'],"</jenis_kelamin>";
 echo"<no_hp>",$data['no_hp'],"</no_hp>";
 echo"<alamat>",$data['alamat'],"</alamat>";
 echo"<email>",$data['email'],"</email>";
 echo "</Toko_Online>";
}
echo "</data>";
?>