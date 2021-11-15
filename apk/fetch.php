<?php
include "server/header.php";

$listClient = mysqli_query($koneksi, "SELECT * FROM nebeng_client WHERE driverid='$_SESSION[userid]'");
$jumlah = mysqli_num_rows($listClient);
while ($r = mysqli_fetch_array($listClient)) {
    echo '
    <div class="card-nebeng align-items-tengah">
    <img src="assets/img/client.png" alt="client">
    <p style="white-space: nowrap; max-width:100px; text-overflow: ellipsis; overflow: hidden;font-weight: 600;">'.$r['namac'].'</p>
    <p style="font-size:3vw; color: #9e9e9e;">1 Menit yang lalu</p>
    <div style="margin-left:2vw; margin-right:2vw; margin-top:3vw;" class="flex justify-content-between">
        <div class="nebeng-btn-biru">
            <a href="server/nebeng-driver.php?clientid='.$r['clientid'].'" style="text-decoration: none; color:#fff;">
            <i class="ri-check-line"></i>
            </a>
        </div>
        <div class="nebeng-btn-putih">
        <a href="server/nebeng-driver-cencel.php?clientid='.$r['clientid'].'" style="text-decoration: none;">
            <i class="ri-close-line"></i>
            </a>
        </div>
    </div>
</div>
    ';
}
