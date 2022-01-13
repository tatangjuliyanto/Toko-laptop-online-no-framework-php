<html>
<head>
 <title>Tambar Order</title>
</head>
<body bgcolor="#00BFFF">
    <center>
 <a href="index.html">Dasboard</a>
 <br/><br/>
 <form action="order.php" method="post" name="form2">
 <table width="25%" border="0">
 <tr>

 <tr>
 <td>Nama Barang</td>
 <td><input type="text" name="nama_barang"></td>
 </tr>
 <tr>
 <td>Nama Pembeli</td>
 <td><input type="text" name="nama_pembeli"></td>
 </tr>
 <tr>
 <td>Jenis Kelamin</td>
 <td><input type="text" name="jenis_kelamin"></td>
 </tr>
 <tr>
 <td>no Hp</td>
 <td><input type="text" name="no_hp"></td>
 </tr>
 <tr>
 <td>Alamat</td>
 <td><input type="text" name="alamat"></td>
 </tr>
 <tr>
 <td>Email</td>
 <td><input type="text" name="email"></td>
 </tr>
 <tr>
 <td></td>
 <td><input type="submit" name="Submit" value="Tambah"></td>
 </tr>
 </table>
 </form>
<?php
 // Check If form submitted, insert form data into users table.
 if(isset($_POST['Submit'])) {
 $nama_barang = $_POST['nama_barang'];
 $nama_pembeli = $_POST['nama_pembeli'];
 $jenis_kelamin = $_POST['jenis_kelamin'];
 $no_hp = $_POST['no_hp'];
 $alamat = $_POST['alamat'];
 $email = $_POST['email'];
 // include database connection file
 include_once("koneksi.php");
 // Insert user data into table
 $result = mysqli_query($con, "INSERT INTO tb_order(nama_barang,nama_pembeli,jenis_kelamin,no_hp,alamat,email)
 VALUES('$nama_barang','$nama_pembeli','$jenis_kelamin','$no_hp','$alamat','$email')");
 // Show message when user added
  echo "Terimakasih telah Order Data berhasil disimpan. <a href='index.html'>silahkan kembali ke menu awal</a>";
 }
 ?>
 </center>
 </body>
 </html>