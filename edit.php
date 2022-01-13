<?php
// include database connection file
include_once("koneksi.php");
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
 $id = $_POST['id'];
 $nama=$_POST['nama'];
 $Jenis_kelamin=$_POST['Jenis_kelamin'];
 $no_hp=$_POST['no_hp'];
 $alamat=$_POST['alamat'];
 // update user data
$result = mysqli_query($con, "UPDATE db_pembeli SET
nama='$nama',Jenis_kelamin='$Jenis_kelamin',no_hp='$no_hp',alamat='$alamat' WHERE id='$id'");
 // Redirect to homepage to display updated user in list
header("Location: lihat.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
// Fetech user data based on id
$result = mysqli_query($con, "SELECT * FROM db_pembeli WHERE id='$id'");
while($user_data = mysqli_fetch_array($result))
{
$id = $user_data['id'];
$nama = $user_data['nama'];
$Jenis_kelamin = $user_data['Jenis_kelamin'];
$no_hp = $user_data['no_hp'];
$alamat = $user_data['alamat'];
}
?>
<html>
<head>
<title>Edit Data Pelanggan</title>
</head>
<body>
 <a href="lihat.php">Home</a>
 <br/><br/>
<form name="update_mahasiswa" method="post" action="edit.php">
<table border="0">
<tr>
<td>Nama</td>
<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="text" name="Jenis_kelamin" value=<?php echo $Jenis_kelamin;?>></td>
</tr>
<tr>
<td>no hp</td>
<td><input type="text" name="no_hp" value=<?php echo $no_hp;?>></td>
</tr>
<tr>
<td>Alamat</td>
<td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
</tr>
<tr>
<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
<td><input type="submit" name="update" value="Update"></td>
</tr>
</table>
</form>
</body>
</html>