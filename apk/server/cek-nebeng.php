<?php
include "header.php";

$userid = $_POST['userid'];

$cek = mysqli_query($koneksi,"SELECT nebeng_status FROM user WHERE userid='$userid'");
$r = mysqli_fetch_array($cek);
if($cek){
    echo $r['nebeng_status'];
}else{
    var_dump($userid);
}