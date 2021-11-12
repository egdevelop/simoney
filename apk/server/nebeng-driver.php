<?php
include "header.php";

$clientid = $_GET['clientid'];

$set_driver = mysqli_query($koneksi,"UPDATE sinebeng SET status = '2' WHERE userid='$_SESSION[userid]'");
$set_client = mysqli_query($koneksi,"UPDATE user SET nebeng_status = '1' WHERE userid = '$clientid'");

if($set_driver && $set_client){
    header("location:../chat.php?kode=$clientid&type=sinebeng&pesan=Terhubung");
}else{
    var_dump($set_client);
}

?>