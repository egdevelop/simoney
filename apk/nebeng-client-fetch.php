<?php
include "server/header.php";
if($_GET['cari'] != ''){
$dataDriver = mysqli_query($koneksi, "SELECT * FROM sinebeng WHERE status = '1' AND nama LIKE '%$_GET[cari]%' OR tujuan LIKE '%$_GET[cari]%' OR tarif LIKE '%$_GET[cari]%'");
}else{
$dataDriver = mysqli_query($koneksi, "SELECT * FROM sinebeng WHERE status = '1'");

}
$jumlah = mysqli_num_rows($dataDriver);
if($jumlah > 0){
    while ($arrDriver = mysqli_fetch_array($dataDriver)) {
        echo '
                    <div class="card-nenbeng-client">
                        <div class="flex align-items-tengah">
                            <div style="width:70%;" class="flex align-items-tengah justify-content-between">
                                <div class="text-waa">
                                    <span style="font-size: 4vw; font-weight:500; color: #000830;">' . $arrDriver['nama'] . '</span>
                                    <div style="font-size: 2.5vw;" class="flex align-items-tengah">
                                        <i class="ri-map-pin-line mr-2"></i>
                                        <p style=" color: #000830;">' . $arrDriver['tujuan'] . '</p>
                                    </div>
                                </div>
                                <p style="font-size: 3vw;">Rp. ' . $arrDriver['tarif'] . '</p>
                            </div>
                            <div class="btn-pilih-in text-align-tengah ml-5">
                                <a style="text-decoration:none; color:#fff;" href="detail-driver.php?driverid=' . $arrDriver['userid'] . '"> Pesan</a>
                            </div>
    
                        </div>
                    </div>
                    ';
    }
}else{
    echo'
    <br>
    <br>
    <div class="text-align-tengah" style="">
                <img src="assets/img/motors.png" />
                <p style="font-size:5vw; font-weight:400; padding-top:5vw;">Tidak ada <span style="font-weight:600;" class="biru">driver</span></p>
                <p style="font-size:3.5vw; padding:5vw; color:rgba(64, 70, 100, 0.50);">Yah.... , Belum ada driver yang bisa diajak nebeng saat ini</p>
            </div>
    ';
}
