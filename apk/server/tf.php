<?php
include "header.php";

$toid = $_POST['toid'];
$fromid = $_POST['fromid'];
$jumlah = $_POST['jumlah'];

$potong = mysqli_query($koneksi,"UPDATE user SET saldo = saldo - '$jumlah' WHERE userid ='$fromid'");

if($potong){
$tambah = mysqli_query($koneksi,"UPDATE user SET saldo = saldo + '$jumlah' WHERE userid ='$toid'");
if($tambah){
    $catat = mysqli_query($koneksi,"INSERT INTO transaksi (userid,type,jumlah) values ('$toid','1','$jumlah')");
    $catat2 = mysqli_query($koneksi,"INSERT INTO transaksi (userid,type,jumlah) values ('$fromid','0','$jumlah')");
    $data['href'] = "dashboard.php?pesan=Transfer%20Berhasil";
    $data['type'] = "tf";
    echo json_encode($data);
}else{
    var_dump($toid);
}
}else{
    var_dump($fromid);
}

?>
