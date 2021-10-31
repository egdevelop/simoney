<?php
include "header.php";

$datas = mysqli_query($koneksi,"SELECT * FROM nebeng_client WHERE driverid = '$_SESSION[userid]' OR clientid = '$_SESSION[userid]'");
$r = mysqli_fetch_array($datas);

if($r['status'] == 1){
    $remove = mysqli_query($koneksi,"DELETE FROM nebeng_client WHERE clientid = '$_SESSION[userid]' OR driverid='$_SESSION[userid]'");
    $daraTf = mysqli_query($koneksi,"SELECT * FROM pending WHERE toid = '$_SESSION[userid]' OR fromid='$_SESSION[userid]' AND ket = 'sinebeng'");
    $d = mysqli_fetch_array($daraTf);
    $tf = mysqli_query($koneksi,"UPDATE user SET saldo = saldo + '$d[jumlah]' WHERE userid = '$d[toid]'");
    if($tf && $tf2){
        $removePending = mysqli_query($koneksi,"DELETE FROM pending WHERE toid = '$_SESSION[userid]' OR fromid='$_SESSION[userid]' AND ket = 'sinebeng'");
    }
    $update1 = mysqli_query($koneksi,"UPDATE user SET nebeng_status = '0' WHERE userid='$_SESSION[userid]'");
    $update2 = mysqli_query($koneksi,"UPDATE sinebeng SET status = '0' WHERE userid='$_SESSION[userid]'");
    $hapusChat = mysqli_query($koneksi,"DELETE FROM chat WHERE user1= '$_SESSION[userid]' OR user2='$_SESSION[userid]'");
    header("location:../dashboard.php");
}else{
    $update = mysqli_query($koneksi,"UPDATE nebeng_client SET status ='1' WHERE clientid = '$_SESSION[userid]' OR driverid='$_SESSION[userid]' ");
    $update1 = mysqli_query($koneksi,"UPDATE user SET nebeng_status = '0' WHERE userid='$_SESSION[userid]'");
    $update2 = mysqli_query($koneksi,"UPDATE sinebeng SET status = '0' WHERE userid='$_SESSION[userid]'");
    header("location:../dashboard.php");
}