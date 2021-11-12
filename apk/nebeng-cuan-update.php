<?php
include "server/header.php";

$exist = mysqli_query($koneksi, "SELECT * FROM sinebeng WHERE userid='$_SESSION[userid]'");
$r = mysqli_fetch_array($exist);

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
                    <h2 style="font-size: 5vw;">Setidaknya ada</h2>
                    <h3 style="font-size: 4.5vw;">bensin hari ini</h3>
                </div>
                <img src="assets/img/nebeng-corak-1.png" alt="corak">
            </div>
            <br>
            <form action="server/nebeng-cuan-update.php" method="POST">
                <div class="mt-5">
                    <span style="font-weight:600; color: rgba(0, 8, 48, 0.47);" class="sub-text mb-5">Set Tarif</span>
                </div>
                <input type="text" name="tarif" value="<?= $r['tarif'] ?>" class="input-nebeng" placeholder="Bensin cukup hidup aman...">
                <div class="mt-5">
                    <span style="font-weight:600; color: rgba(0, 8, 48, 0.47);" class="sub-text mb-5">Set Lokasi</span>
                </div>
                <input type="text" name="lokasi" value="<?= $r['lokasi'] ?>" class="input-nebeng" placeholder="Kamu dimana nih...">
                <div class="mt-5">
                    <span style="font-weight:600; color: rgba(0, 8, 48, 0.47);" class="sub-text mb-5">Set Tujuan</span>
                </div>
                <input type="text" name="tujuan" value="<?= $r['tujuan'] ?>" class="input-nebeng" placeholder="Jalan ke rumah yaa biar ga muter...">
                <div class="mt-5">
                    <span style="font-weight:600; color: rgba(0, 8, 48, 0.47);" class="sub-text mb-5">Set Kendaraan</span>
                </div>
                <div class="flex">
                    <input type="text" name="kendaraan" value="<?= $r['kendaraan'] ?>" class="input-nebeng-2" placeholder="Vario">
                    <input type="text" name="plat" value="<?= $r['plat'] ?>" class="input-nebeng-3" placeholder="Z 123 NA">
                    <input type="hidden" name="userid" class="input-nebeng-3" value="<?php echo $_SESSION['userid'] ?>">
                    <input type="hidden" name="nama" class="input-nebeng-3" value="<?php echo $_SESSION['nama'] ?>">
                </div>
                <input style="border: none;" type="submit" class="button-biru-2 btn-nebeng text-align-tengah mt-10 mb-5" value="Lanjutkan">
            </form>
            <div class="icon-input">
                <div style="width: 8vw;" class="badge-biru mr-3 mb-13">
                    Rp
                </div>
                <div style="width: 8vw;" class="badge-biru mb-13">
                    <i style="font-size: 4vw;" class="ri-map-pin-line"></i>
                </div>
                <div style="width: 8vw;" class="badge-biru mb-13">
                    <i style="font-size: 4vw;" class="ri-map-pin-line"></i>
                </div>
                <div style="width: 8vw;" class="badge-biru mb-13">
                    <i style="font-size: 4vw;" class="ri-motorbike-fill"></i>
                </div>
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