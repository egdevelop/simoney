<?php
include "server/header.php";

$detailDriver = mysqli_query($koneksi,"SELECT * FROM sinebeng WHERE userid = '$_GET[driverid]'");
$r = mysqli_fetch_array($detailDriver);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <title>SIMONEY || GET IN TOUCH WITH US</title>
</head>

<body>
    <div class="card-mobile mb-5">
        <div class="text-align-tengah mb-5">
            <div class="flex mb-5">
                <a href="nebeng-client.php" style="text-decoration: none;">
                    <div style="margin-right: 23vw;" class="badge-biru">
                        <i style="font-size: 5vw; font-weight:600;" class="ri-arrow-left-s-line"></i>
                    </div>
                </a>
                <span style="font-weight:700; font-size:5vw;">SINEBENG</span>
            </div>
            <br>
            <span style="font-weight: 600; margin-top:5vw;">Ini detail <span class="biru">drivermu</span></span>
        </div>
        <p style="font-weight: 500;  font-size:4.5vw; color: #b0b0b0;" class="mb-3">Nama</p>
        <p style="font-weight: 500; font-size:4vw; color:#404664;" class="mb-5"><?= $r['nama'] ?></p>
        <p style="font-weight: 500;  font-size:4.5vw; color: #b0b0b0;" class="mb-3">Lokasi saat ini</p>
        <p style="font-weight: 500; font-size:4vw; color:#404664;" class="mb-5"><?= $r['lokasi'] ?></p>
        <p style="font-weight: 500;  font-size:4.5vw; color: #b0b0b0;" class="mb-3">Lokasi Tujuan</p>
        <p style="font-weight: 500; font-size:4vw; color:#404664;" class="mb-5"><?= $r['tujuan'] ?></p>
        <p style="font-weight: 500;  font-size:4.5vw; color: #b0b0b0;" class="mb-3">Kendaraan</p>
        <p style="font-weight: 500; font-size:4vw; color:#404664;" class="mb-5"><?= $r['kendaraan'] ?> (<?= $r['plat'] ?>)</p>
        <div class="flex justify-content-between mb-5">
            <p style="font-weight: 500;  font-size:4.5vw; color: #b0b0b0;" class="mb-3">Tarif</p>
            <p style="font-weight: 500; font-size:4vw; color:#404664;" class="mb-5">Rp.<?= $r['tarif'] ?></p>
        </div>
        <div class="text-align-tengah">
            <a class="biru" href="bayar-nebeng.php?driverid=<?php echo $_GET['driverid'] ?>" style="font-weight: 600; text-decoration: none;">Lanjut&emsp;></a>
        </div>
    </div>
    </div>
    <div class="nav">
        <a class="mr-10 abu-nav" href="dashboard.php">
            <i class="ri-dashboard-line"></i>
        </a>
        <a class="mr-10 nav-act" href="nebeng.php">
            <i class="ri-route-line"></i>
        </a>
        <a class="mr-10 badge-gradien-biru-2" href="sorry.php">
            <i class="ri-qr-scan-line"></i>
        </a>
        <a class="mr-10 abu-nav" href="nitip.php">
            <i class="ri-open-arm-line"></i>
        </a>
        <a class="mr-10 abu-nav" href="profil.php">
            <i class="ri-user-line"></i>
        </a>
    </div>
</body>

</html>