<?php
include "koneksi.php";
$sql="select * from tb_order order by id_order";
$tampil = mysqli_query($con,$sql);
if (mysqli_num_rows($tampil) > 0) {
$no=1;
$response = array();
 $response["data"] = array();
while ($r = mysqli_fetch_array($tampil)) {
$h['id_order'] = $r['id_order'];
$h['nama_barang'] = $r['nama_barang'];
$h['nama_pembeli'] = $r['nama_pembeli'];
$h['jenis_kelamin'] = $r['jenis_kelamin'];
$h['no_hp'] = $r['no_hp'];
$h['alamat'] = $r['alamat'];
$h['email'] = $r['email'];




array_push($response["data"], $h);
}
echo json_encode($response);
}
else {
$response["message"]="tidak ada data";
echo json_encode($response);
}
?>