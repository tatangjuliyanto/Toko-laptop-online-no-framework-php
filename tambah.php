<html>
<head>
 <title>Tambah data pengunjung</title>
</head>
<body bgcolor="#00BFFF">
    <br>
    <center>
 <a href="index-admin.html">Dasboard</a>
 <br/><br/>

 <form action="tambah.php" method="post" name="form1">
 <table width="25%" border="0">
 <tr>

 <tr>
 <td>Nama</td>
 <td><input type="text" name="nama"></td>
 </tr>
 <tr>
 <td>Jenis kelamin</td>
 <td><input type="text" name="Jenis_kelamin"></td>
 </tr>
 <tr>
 <td>no_hp</td>
 <td><input type="text" name="no_hp"></td>
 </tr>
 <tr>
 <td>Alamat</td>
 <td><input type="text" name="alamat"></td>
 </tr>
 <tr>
 <td></td>
 <td><input type="submit" name="Submit" value="Tambah"></td>
 </tr>
 </table>
 </form>
</center>
<?php
 // Check If form submitted, insert form data into users table.
 if(isset($_POST['Submit'])) {
 $nama = $_POST['nama'];
 $Jenis_kelamin = $_POST['Jenis_kelamin'];
 $no_hp = $_POST['no_hp'];
 $alamat = $_POST['alamat'];
 // include database connection file
 include_once("koneksi.php");
 // Insert user data into table
 $result = mysqli_query($con, "INSERT INTO db_pembeli(nama,Jenis_kelamin,no_hp,alamat)
 VALUES('$nama', '$Jenis_kelamin','$no_hp','$alamat')");
 // Show message when user added
  echo "Data berhasil disimpan. <a href='lihat.php'>View Users</a>";
 }
 ?>
 </body>
 </html>