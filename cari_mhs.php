<html>
<body bgcolor="#00BFFF">
<?php
include 'koneksi.php';
?>
<h3>Form Pencarian Dengan PHP Pelanggan</h3>
<form action="" method="get">
<label>Cari :</label>
<input type="text" name="cari">
<input type="submit" value="Cari">
</form>
<?php
if(isset($_GET['cari'])){
$cari = $_GET['cari'];
echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
<table border="1">
<tr>
<th>No</th>
<th>Nama</th>
<th>Jenis kelamin</th>
<th>NO HP</th>
<th>alamat</th>
</tr>
<?php
if(isset($_GET['cari'])){
$cari = $_GET['cari'];
$sql="select * from db_pembeli where nama like'%".$cari."%'";
$tampil = mysqli_query($con,$sql);
}else{
$sql="select * from db_pembeli";
$tampil = mysqli_query($con,$sql);
}
$no = 1;
while($r = mysqli_fetch_array($tampil)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $r['nama']; ?></td>
<td><?php echo $r['Jenis_kelamin']; ?></td>
<td><?php echo $r['no_hp']; ?></td>
<td><?php echo $r['alamat']; ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>