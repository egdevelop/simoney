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
    echo "waiting.php?href=chat.php?kode=$driverid";
}else{
    echo "g0";
}
}
}else{
    var_dump($listClient);
}