<?php
include "server/header.php";
if(isset($_GET['type'])){
    if($_GET['type'] == "SINITIP"){
        $gambar = "bag-bagus.png";
        $tulisan = "Kamu sedang dalam transaksi sinitip";
    }
    if($_GET['type'] == "SINEBENG"){
        $gambar = "motor-bagus.png";
        $tulisan = "Kamu sedang dalam transaksi sinebeng";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>SIMONEY || GET IN TOUCH WITH US</title>
</head>

<body>
    <div class="card-mobile mb-5">
        <div class="text-align-tengah">
            <span style="font-weight:700; font-size:5vw;">SIMONEY</span>
            <br>
                <img class="animate__animated animate__pulse" style="margin-top:20vh;" src="assets/img/<?= $gambar ?>" alt="">
                <p class="animate__animated animate__pulse" style="font-size:5vw; font-weight:600; padding-top:5vw;">SELESAIKAN <span style="font-weight:600;" class="biru">DULU!!</span></p>
                <p class="animate__animated animate__pulse" style="font-size:3.5vw; padding:5vw; color:rgba(64, 70, 100, 0.50);"><?= $tulisan ?></p>
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
        <a class="mr-10 abu-nav" href="nitip.php">
            <i class="ri-open-arm-line"></i>
        </a>
        <a class="mr-10 abu-nav" href="profil.php">
            <i class="ri-user-line"></i>
        </a>
    </div>
</body>

</html>