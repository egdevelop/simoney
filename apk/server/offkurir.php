<?php
include "header.php";

$setOff = mysqli_query($koneksi,"UPDATE sinitip SET status = '0' WHERE userid='$_SESSION[userid]'");
if($setOff){
    header("location:../nitip.php?s=1");
}else{
    header("location:../nitip-kurir.php?s=0");
}