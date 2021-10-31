<?php
include "server/header.php";

$listClient = mysqli_query($koneksi, "SELECT * FROM nebeng_client WHERE driverid='$_SESSION[userid]'");
$jumlah = mysqli_num_rows($listClient);
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
    <div class="page">
        <div class="card-mobile mb-5">
            <div class="text-align-tengah mb-5">
                <div class="flex">
                    <div style="margin-right: 23vw;" class="badge-biru">
                        <a href="server/offdriver.php" style="text-decoration: none; color:#fff;">
                            <i style="font-size: 5vw; font-weight:600;" class="ri-shut-down-line"></i>
                        </a>
                    </div>
                    <span style="font-weight:700; font-size:5vw;">SINEBENG</span>
                </div>
                <br>
                <br>
                <p style="font-weight: 600; font-size:4vw;
                color: #9e9e9e;">Ada Penumpang yang order nih<br> Selamat bercuan</p>
            </div>
            <div class="flex justify-content-between mb-5">
                <div class="flex align-items-tengah biru">
                    <i class="ri-group-fill mr-3"></i>
                    <p><?= $jumlah ?> Orang</p>
                </div>
                <i class="ri-filter-3-line biru"></i>
            </div>
            <?php
            while ($r = mysqli_fetch_array($listClient)) {


            ?>
                <div class="card-nebeng align-items-tengah">
                    <img src="assets/img/client.png" alt="client">
                    <p style="font-weight: 600;"><?= $r['namac'] ?></p>
                    <p style="font-size:3vw; color: #9e9e9e;">1 Menit yang lalu</p>
                    <div style="margin-left:2vw; margin-right:2vw; margin-top:3vw;" class="flex justify-content-between">
                        <div class="nebeng-btn-biru">
                            <a style="text-decoration: none; color:#fff;" href="server/nebeng-driver.php?clientid=<?php echo $r['clientid'] ?>">
                                <i class="ri-check-line"></i>
                            </a>
                        </div>
                        <div class="nebeng-btn-putih">
                            <i class="ri-close-line"></i>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

            <a style="text-decoration: none;" href="nebeng-cuan.php">
                <div style="height: 13vw; width:92%; margin-left:3vw; margin-top:110vw;" class="button-biru-2 btn-nebeng text-align-tengah mt-10 mb-5">
                    Atur profil anda
                </div>
            </a>
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
        <a class="mr-10 abu-nav" href="sorry.php">
            <i class="ri-open-arm-line"></i>
        </a>
        <a class="mr-10 abu-nav" href="profil.php">
            <i class="ri-user-line"></i>
        </a>
    </div>
</body>

</html>