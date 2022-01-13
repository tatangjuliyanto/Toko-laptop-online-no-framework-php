<?php
include "koneksi.php";
$sql="select * from db_pembeli order by id";
$tampil = mysqli_query($con,$sql);
if (mysqli_num_rows($tampil) > 0) {
$no=1;
$response = array();
 $response["data"] = array();
while ($r = mysqli_fetch_array($tampil)) {
$h['id'] = $r['id'];
$h['nama'] = $r['nama'];
$h['Jenis_kelamin'] = $r['Jenis_kelamin'];
$h['no_hp'] = $r['no_hp'];
$h['alamat'] = $r['alamat'];




array_push($response["data"], $h);
}
echo json_encode($response);
}
else {
$response["message"]="tidak ada data";
echo json_encode($response);
}
?>