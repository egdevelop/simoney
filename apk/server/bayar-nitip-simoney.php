<?php
include "header.php";

$data = array();

$kuririd = $_POST['kuririd'];
$userid = $_POST['userid'];
$jumlah = $_POST['jumlah'];
$id_pesanan = $_POST['id_pesanan'];

$simpan = mysqli_query($koneksi,"INSERT INTO pending (toid,fromid,jumlah,ket)VALUES('$kuririd','$userid','$jumlah','sinitip')");
$set_client = mysqli_query($koneksi,"UPDATE user SET nitip_status = '2' WHERE userid = '$_SESSION[userid]'");

if($simpan){
    $data['href'] = "waiting.php?href=chat.php?kode=$kuririd";
    $data['type'] = "sinitip";
    echo json_encode($data);
}else{
    echo "g0";
}