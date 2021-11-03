<?php
include "header.php";

$driverid = $_POST['driverid'];
$userid = $_POST['userid'];
$jumlah = $_POST['jumlah'];
$namac = $_POST['namac'];

$listClient = mysqli_query($koneksi,"INSERT INTO nebeng_client (driverid,clientid,namac)VALUES('$driverid','$userid','$namac')");
if($listClient){
$potong = mysqli_query($koneksi,"UPDATE user SET saldo = saldo - '$jumlah' WHERE userid = '$userid'");
if($potong){
$simpan = mysqli_query($koneksi,"INSERT INTO pending (toid,fromid,jumlah,ket)VALUES('$driverid','$userid','$jumlah','sinebeng')");

if($simpan){
    $data['href'] = "waiting.php?href=chat.php?kode=$driverid";
    $data['type'] = "sinebeng";
    echo json_encode($data);
}else{
    echo "g0";
}
}
}else{
    var_dump($listClient);
}