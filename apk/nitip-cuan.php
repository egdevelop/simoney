<?php
include "server/header.php";

$exist = mysqli_query($koneksi, "SELECT * FROM sinitip WHERE userid='$_SESSION[userid]'");
$count = mysqli_num_rows($exist);

if ($count == 1) {
    $setOn = mysqli_query($koneksi, "UPDATE sinitip SET status = '1' WHERE userid='$_SESSION[userid]'");
    if ($setOn) {
        header("location:nitip-kurir.php");
    } else {
        header("location:nitip-cuan.php");
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
    <title>SIMONEY || GET IN TOUCH WITH US</title>
</head>

<body>
    <div class="page">
        <div class="card-mobile mb-5 nebeng-cuan">
            <div style="color: #fff;" class="mb-10">.</div>
            <div class="flex align-items-tengah justify-content-between">
                <img src="assets/img/nebeng-corak-1.png" alt="corak">
                <div class="text-nebeng text-align-tengah">
                    <h2 style="font-size: 5vw;">Cari cuan</h2>
                    <h3 style="font-size: 4.5vw;">bareng sinitip yuk</h3>
                </div>
                <img src="assets/img/nebeng-corak-1.png" alt="corak">
            </div>
            <br>
            <form method="POST" action="server/nitip-cuan.php">
                <div class="mt-5">
                    <span style="font-weight:600; color: rgba(0, 8, 48, 0.47);" class="sub-text mb-5">Set Upah</span>
                </div>
                <input type="text" name="upah" class="input-nebeng" placeholder="Bensin cukup hidup aman...">
                <div class="mt-5">
                    <span style="font-weight:600; color: rgba(0, 8, 48, 0.47);" class="sub-text mb-5">Set Lokasi</span>
                </div>
                <input type="text" name="lokasi" class="input-nebeng" placeholder="Kamu dimana nih...">
                <input style="border: none;" type="submit" class="button-biru-2 btn-nebeng text-align-tengah mt-10 mb-5" value="Lanjutkan">
            </form>
            <div style="  position: absolute; margin-top: -61vw; margin-left: 2vw;">
                <div style="width: 8vw;" class="badge-biru mr-3 mb-13">
                    Rp
                </div>
                <div style="width: 8vw;" class="badge-biru mb-13">
                    <i style="font-size: 4vw;" class="ri-map-pin-line"></i>
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