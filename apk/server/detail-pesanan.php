<?php
include "header.php";

$detail = array();

for($i = 0;$i <= 10;$i++){
    if(isset($_POST["pesanan$i"])){
        if($_POST["pesanan$i"] != NULL){
            $detail["pesanan$i"]["nama"] = $_POST["pesanan$i"];
            $detail["pesanan$i"]["harga"] = $_POST["harga$i"];
        }
    }
}
$catatan = $_POST['catatan'];
$pesanan = json_encode($detail);
$kuririd = $_POST['kuririd'];
$clientid = $_SESSION['userid'];
$nama = $_SESSION['nama'];
$simpan = mysqli_query($koneksi,"INSERT INTO nitip_client (kuririd,clientid,nama,pesanan,catatan,status)VALUES('$kuririd','$clientid','$nama','$pesanan','$catatan','0')");
if($simpan){
    header("location:../bayar-nitip.php");
}
?>