<?php
include "server/header.php";

$status = mysqli_query($koneksi, "SELECT status FROM sinebeng WHERE userid='$_SESSION[userid]'");
$status1 = mysqli_query($koneksi, "SELECT nebeng_status FROM user WHERE userid='$_SESSION[userid]'");
$data = mysqli_query($koneksi, "SELECT driverid,clientid FROM nebeng_client WHERE clientid='$_SESSION[userid]' OR driverid='$_SESSION[userid]'");
$s = mysqli_fetch_array($status);
$s1 = mysqli_fetch_array($status1);
$r = mysqli_fetch_array($data);
if ($s != null) {
    if ($s['status'] == '1') {
        header("location:nebeng-driver.php");
    }
    if ($s['status'] == '2') {
        $kode = $r['clientid'];
        header("location:chat.php?kode=$kode&type=sinebeng");
    }
}

if ($status1 != null) {
    if ($s1['nebeng_status'] == '1') {
        $kode = $r['driverid'];
        header("location:chat.php?kode=$kode&type=sinebeng");
    }
}else{
    var_dump($status1);
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
        <div class="card-mobile mb-5">
            <div class="text-align-tengah mb-5">
                <span style="font-weight:700; font-size:5vw;">SINEBENG</span>
            </div>
            <div style="color: #fff;" class="mb-10">.</div>
            <div class="flex align-items-tengah justify-content-between">
                <img src="assets/img/nebeng-corak-1.png" alt="corak">
                <div class="text-nebeng text-align-tengah">
                    <h2 style="font-size: 5vw;">Mau jadi apa</h2>
                    <h3 style="font-size: 4.5vw;">hari ini?</h3>
                </div>
                <img src="assets/img/nebeng-corak-1.png" alt="corak">
            </div>
            <a style="text-decoration: none;" href="nebeng-cuan.php">
                <div class="button-biru-2 btn-nebeng text-align-tengah mt-10 mb-5">
                    Mau cari cuan
                </div>
            </a>

            <div class="text-align-tengah mt-5">
                <p style="color: #9e9e9e; font-weight:400; font-size:3vw;">Pilih salah satu</p>
            </div>
            <a style="text-decoration: none;" href="nebeng-client.php">
                <div class="button-putih-2 btn-nebeng text-align-tengah mt-5 mb-5">
                    Mau Nebeng
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
        <a class="mr-10 abu-nav" href="nitip.php">
            <i class="ri-open-arm-line"></i>
        </a>
        <a class="mr-10 abu-nav" href="profil.php">
            <i class="ri-user-line"></i>
        </a>
    </div>
</body>

</html>