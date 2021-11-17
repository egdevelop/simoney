<?php
include "server/header.php";
    $dataKurir = mysqli_query($koneksi, "SELECT * FROM sinitip WHERE status = 1 AND (nama LIKE '%$_GET[cari]%' OR lokasi LIKE '%$_GET[cari]%' OR upah LIKE '$_GET[cari]')");
$jumlah = mysqli_num_rows($dataKurir);
if ($jumlah > 0) {
    while ($arrKurir = mysqli_fetch_array($dataKurir)) {
        echo '
                <div class="card-nenbeng-client listSearch products-grid">
                    <div class="flex align-items-tengah productbox">
                        <div style="width:70%;" class="flex align-items-tengah justify-content-between">
                            <div class="text-waa">
                                <span style="font-size: 4vw; font-weight:500; color: #000830;">' . $arrKurir['nama'] . '</span>
                                <div style="font-size: 2.5vw;" class="flex align-items-tengah">
                                    <i class="ri-map-pin-line mr-2"></i>
                                    <p style=" color: #000830;">' . $arrKurir['lokasi'] . '</p>
                                </div>
                            </div>
                            <p class="price" style="font-size: 3vw;">Rp. ' . $arrKurir['upah'] . '</p>
                        </div>
                        <div class="btn-pilih-in text-align-tengah ml-5">
                            <a style="text-decoration:none; color:#fff;" href="detail-kurir.php?kuririd=' . $arrKurir['userid'] . '"> Pesan</a>
                        </div>

                    </div>
                </div>
                ';
    }
} else {
    echo '
    <br>
    <br>
    <div class="text-align-tengah" style="">
                <img src="assets/img/bags.png" />
                <p style="font-size:5vw; font-weight:400; padding-top:5vw;">Tidak ada <span style="font-weight:600;" class="biru">kurir</span></p>
                <p style="font-size:3.5vw; padding:5vw; color:rgba(64, 70, 100, 0.50);">Yah.... , Belum ada kurir,, jadi ga bisa nitip deh...</p>
            </div>
';
}
