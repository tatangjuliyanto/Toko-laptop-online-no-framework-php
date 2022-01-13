<?php
// Create database connection using config file
include_once("koneksi.php");
// Fetch all users data from database
$result = mysqli_query($con, "SELECT * FROM db_pembeli");
?>
<html>
<head>
 <title>Halaman Utama</title>
 <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body bgcolor="#00BFFF">
    <div class="ada">
    <br>
    <br>
    <table width='100%' border=4>
        <tr>
        <h4><a href="tambah.php">Tambah Data Baru</a>&emsp;<a href="cari_mhs.php">Cari pengunjung</a>&emsp;<a href="toko_json.php">Lihat Json</a>&emsp;<a href="toko_xml.php">Lihat xml</a>&emsp;
        <a href="lap_mhs.php">Print Data</a>&emsp;<a href="index-admin.html">Dasboard</a><br></h4>
        </tr>
    </table>


<br>
 <table width='80%' border=4>
 <tr colspan="3" bgcolor="#7CFC00">
 <th>ID_pengunjung</th> <th>Nama</th> <th>Gender</th> <th>nomor hp</th>
 <th>alamat</th> <th>Update</th>
 </tr>
<?php
while($user_data = mysqli_fetch_array($result)) {
 echo "<tr>";
 echo "<td>".$user_data['id']."</td>";
 echo "<td>".$user_data['nama']."</td>";
 echo "<td>".$user_data['Jenis_kelamin']."</td>";
 echo "<td>".$user_data['no_hp']."</td>";
 echo "<td>".$user_data['alamat']."</td>";
 echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a
href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
}
?>
</table>
</body>
</div>
</html>