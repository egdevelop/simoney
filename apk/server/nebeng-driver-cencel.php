<?php
include "header.php";

$clientid = $_GET['clientid'];

$remove = mysqli_query($koneksi,"DELETE FROM nebeng_client WHERE clientid = '$clientid' AND driverid='$_SESSION[userid]'");
$set_client = mysqli_query($koneksi,"UPDATE user SET nebeng_status = '0' WHERE userid = '$clientid'");
$removePending = mysqli_query($koneksi,"DELETE FROM pending WHERE toid = '$_SESSION[userid]' AND fromid='$clientid' AND ket = 'sinebeng'");
if($remove && $set_client){
    header("location:../nebeng-driver.php?pesan=Pelanggan%20berhasil%20ditolak");
}else{
    var_dump("DELETE FROM nebeng_client WHERE clientid = '$clientid'");
}

?>