<?php
include "header.php";

$clientid = $_GET['clientid'];

$remove = mysqli_query($koneksi,"DELETE FROM nitip_client WHERE clientid = '$clientid' AND kuririd='$_SESSION[userid]'");
$set_client = mysqli_query($koneksi,"UPDATE user SET nitip_status = '0' WHERE userid = '$clientid'");
$removePending = mysqli_query($koneksi,"DELETE FROM pending WHERE toid = '$_SESSION[userid]' AND fromid='$clientid' AND ket = 'sinebeng'");
if($remove && $set_client){
    header("location:../nitip-kurir.php?pesan=Pelanggan%20berhasil%20ditolak");
}else{
    var_dump("DELETE FROM nebeng_client WHERE clientid = '$clientid'");
}

?>