<?php
include "header.php";

$link = $_GET['link'];
$jumlah = $_GET['jumlah'];
$toid = $_GET['toid'];

$cek = mysqli_query($koneksi,"SELECT * FROM user WHERE userid = '$toid'");
$cekData = mysqli_fetch_array($cek);

if($cekData['saldo'] < $jumlah){
    header("location:../tf2.php?pesan=Maaf%20saldo%20tidak%20cukup&toid=$toid");
}else{
    header("location:../pin.php?link=$link");
}