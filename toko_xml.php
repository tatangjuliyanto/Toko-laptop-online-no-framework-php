<?php
include "koneksi.php";
header('Content-Type: text/xml');
$query = "SELECT * FROM db_pembeli";
$hasil = mysqli_query($con,$query);
$jumField = mysqli_num_fields($hasil);
echo "<?xml version='1.0'?>";
echo "<data>";
while ($data = mysqli_fetch_array($hasil))
{
 echo "<Toko_Online>";
 echo"<id>",$data['nim'],"</id>";
 echo"<nama>",$data['nama'],"</nama>";
 echo"<Jenis_kelamin>",$data['Jenis_kelamin'],"</Jenis_kelamin>";
 echo"<no_hp>",$data['no_hp'],"</no_hp>";
 echo"<alamat>",$data['alamat'],"</alamat>";
 echo "</Toko_Online>";
}
echo "</data>";
?>