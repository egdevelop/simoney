<?php
session_start();
include "koneksi.php";

$userid = $_POST['username'];
$pw = $_POST['password'];

$data = mysqli_query($koneksi,"SELECT * FROM user WHERE userid = '$userid' AND password = '$pw'");
$cek = mysqli_num_rows($data);
$r = mysqli_fetch_array($data);

if($cek == 1){
    $_SESSION['nama'] = $r['nama'];
    $_SESSION['saldo'] = $r['saldo'];
    $_SESSION['userid'] = $r['userid'];
    header("location:../dashboard.php");
}else{
    var_dump($cek);
}
?>