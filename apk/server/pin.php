<?php
include "header.php";

$pin = $_POST['pin'];
$userid = $_POST['userid'];

$verif = mysqli_query($koneksi,"SELECT * FROM user WHERE userid='$userid' AND pin='$pin'");
$cek = mysqli_num_rows($verif);

if($cek == 1){
    echo "1";
}else{
    var_dump($pin);
}