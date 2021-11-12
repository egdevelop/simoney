<?php
include "header.php";

isset($_POST['tarif']) ? $tarif = $_POST['tarif'] : null;
isset($_POST['lokasi']) ? $lokasi = $_POST['lokasi'] : null;
isset($_POST['tujuan']) ? $tujuan = $_POST['tujuan'] : null;
isset($_POST['kendaraan']) ? $kendaraan = $_POST['kendaraan'] : null;
isset($_POST['plat']) ? $plat = $_POST['plat'] : null;
isset($_POST['userid']) ? $userid = $_POST['userid'] : null;
isset($_POST['nama']) ? $nama = $_POST['nama'] : null;

if($_POST == 0){
    header("location:../nebeng-cuan.php?s=0");
}else{
    $simpan = mysqli_query($koneksi,"UPDATE sinebeng SET nama = '$nama', tarif='$tarif', lokasi = '$lokasi' , tujuan='$tujuan', kendaraan = '$kendaraan' , plat ='$plat' WHERE userid = '$userid'");
    if($simpan){
        header("location:../nebeng-driver.php?pesan=Profil%20Berhasil%20Di%20Update");
    }else{
        header("location:../nebeng-cuan.php?s=01");
    }
}
?>