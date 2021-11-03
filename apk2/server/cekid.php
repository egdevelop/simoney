<?php
include "header.php";

$cek = mysqli_query($koneksi,"SELECT nama FROM user WHERE userid = '$_POST[userid]'");
$jumlah = mysqli_num_rows($cek);
$r= mysqli_fetch_array($cek);

if($jumlah == 1){
    echo $r['nama'];
}else{
    echo "Nomor akun tidak ditemukan";
}

?>