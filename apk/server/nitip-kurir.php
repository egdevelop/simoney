<?php
include "header.php";

$clientid = $_GET['clientid'];

$set_driver = mysqli_query($koneksi,"UPDATE sinitip SET status = '2' WHERE userid='$_SESSION[userid]'");
$set_client = mysqli_query($koneksi,"UPDATE user SET nitip_status = '1' WHERE userid = '$clientid'");

if($set_driver && $set_client){
    header("location:../chat.php?kode=$clientid&type=sinitip&pesan=Terhubung");
}else{
    var_dump($set_client);
}

?>