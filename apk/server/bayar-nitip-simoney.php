<?php
include "header.php";

$data = array();

$kuririd = $_POST['kuririd'];
$userid = $_POST['userid'];
$jumlah = $_POST['jumlah'];
$id_pesanan = $_POST['id_pesanan'];

$potong = mysqli_query($koneksi,"UPDATE user SET saldo = saldo - '$jumlah' WHERE userid = '$userid'");
if($potong){
$simpan = mysqli_query($koneksi,"INSERT INTO pending (toid,fromid,jumlah,ket)VALUES('$kuririd','$userid','$jumlah','sinitip')");

if($simpan){
    $data['href'] = "waiting.php?href=chat.php?kode=$kuririd";
    $data['type'] = "sinitip";
    echo json_encode($data);
}else{
    echo "g0";
}
}