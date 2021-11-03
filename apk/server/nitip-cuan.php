<?php
include "header.php";

$userid = $_SESSION['userid'];
$nama = $_SESSION['nama'];
$upah = $_POST['upah'];
$lokasi = $_POST['lokasi'];

$simpan = mysqli_query($koneksi,"INSERT INTO sinitip (userid,nama,status,upah,lokasi)VALUES('$userid','$nama','1','$upah','$lokasi')");
if($simpan){
    header("location:../nitip-kurir.php");
}else{
    echo "GAGAL";
}
