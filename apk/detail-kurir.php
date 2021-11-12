<?php
include "server/header.php";
$dataKurir = mysqli_query($koneksi,"SELECT * FROM sinitip WHERE userid = '$_GET[kuririd]'");
$r = mysqli_fetch_array($dataKurir);
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
        <div class="text-align-tengah mb-5 mt-3">
            <div class="flex mb-5">
                <a href="nitip-client.php" style="text-decoration: none;">
                    <div style="margin-right: 27vw;" class="badge-biru">
                        <i style="font-size: 5vw; font-weight:600;" class="ri-arrow-left-s-line"></i>
                    </div>
                </a>
                <span style="font-weight:700; font-size:5vw;">SINITP</span>
            </div>
            <br>
            <span style="font-weight: 600; margin-top:10vw;">Ini detail <span class="biru">kurirmu</span></span>
        </div>
        <div style="margin-top: 15vw;">
            <p style="font-weight: 500;  font-size:4.5vw; color: #b0b0b0;" class="mb-3">Nama</p>
            <p style="font-weight: 500; font-size:4vw;" class="mb-10"><?= $r['nama'] ?></p>
            <p style="font-weight: 500;  font-size:4.5vw; color: #b0b0b0;" class="mb-3">Lokasi saat ini</p>
            <p style="font-weight: 500; font-size:4vw;" class="mb-10"><?= $r['lokasi'] ?></p>
            <div class="flex justify-content-between mb-5">
                <p style="font-weight: 500;  font-size:4.5vw; color: #b0b0b0;" class="mb-3">Upah</p>
                <p style="font-weight: 500; font-size:4vw;" class="mb-5">Rp.<?= $r['upah'] ?></p>
            </div>
            <div class="text-align-tengah">
                <a class="biru" href="detail-pesanan.php?kuririd=<?= $_GET['kuririd'] ?>" style="font-weight: 600; text-decoration: none;">Lanjut&emsp;></a>
            </div>
        </div>
    </div>
    </div>
    <div class="nav">
        <a class="mr-10 abu-nav" href="dashboard.php">
            <i class="ri-dashboard-line"></i>
        </a>
        <a class="mr-10 abu-nav" href="nebeng.php">
            <i class="ri-route-line"></i>
        </a>
        <a class="mr-10 badge-gradien-biru-2" href="sorry.php">
            <i class="ri-qr-scan-line"></i>
        </a>
        <a class="mr-10 nav-act" href="nitip.php">
            <i class="ri-open-arm-line"></i>
        </a>
        <a class="mr-10 abu-nav" href="profil.php">
            <i class="ri-user-line"></i>
        </a>
    </div>
</body>

</html>