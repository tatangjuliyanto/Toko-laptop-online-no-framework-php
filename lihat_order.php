<?php
// Create database connection using config file
include_once("koneksi.php");
// Fetch all users data from database
$result = mysqli_query($con, "SELECT * FROM tb_order");
?>
<html>
<head>
 <title>Halaman Utama</title>
 <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body bgcolor="#00BFFF">

 <br>
 <table width='80%' border=4>
 <tr colspan="3" bgcolor="#7CFC00">
 <th>ID Order</th> <th>Nama Barang</th> <th>Nama Pembeli</th> <th>Jenis Kelamin</th>
 <th>Nomor HP</th> <th>Alamat</th> <th>Email</th>
 </tr>
<?php
while($user_data = mysqli_fetch_array($result)) {
 echo "<tr>";
 echo "<td>".$user_data['id_order']."</td>";
 echo "<td>".$user_data['nama_barang']."</td>";
 echo "<td>".$user_data['nama_pembeli']."</td>";
 echo "<td>".$user_data['jenis_kelamin']."</td>";
 echo "<td>".$user_data['no_hp']."</td>";
 echo "<td>".$user_data['alamat']."</td>";
 echo "<td>".$user_data['email']."</td>";
 echo "<td><a href='edit.php?id=$user_data[id_order]'>Edit</a> | <a
href='delete.php?id=$user_data[id_order]'>Delete</a></td></tr>";
}
?>
</table>

</table>

</table>
</body>
</div>
</html>