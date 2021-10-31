<?php
include "header.php";

$setOff = mysqli_query($koneksi,"UPDATE sinebeng SET status = '0' WHERE userid='$_SESSION[userid]'");
if($setOff){
    header("location:../nebeng.php?s=1");
}else{
    header("location:../nebeng-driver.php?s=0");
}