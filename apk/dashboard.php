<?php
include "server/header.php";

$dataUser = mysqli_query($koneksi, "SELECT * FROM user WHERE userid = '$_SESSION[userid]'");
$ruser = mysqli_fetch_array($dataUser);

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
            <p class="sub-text">Hi 👋</p>
            <span style="font-weight:600;" class="sub-text mb-3"><?= $_SESSION['nama'] ?></span>
            <a href="kartu.php">
                <img style="width:80vw;" src="assets/img/card-polos.png" alt="">
            </a>
            <div class="card-info-2 text-align-tengah">
                <p class="mb-3">1 2 3 4&emsp;5 6 7 8&emsp;9 0 1 2&emsp;3 4 5 6</p>
                <div class="flex justify-content-between">
                    <p><?= $_SESSION['nama'] ?></p>
                    <p>09/27</p>
                </div>
            </div>
            <span style="font-weight:600; color: rgba(0, 8, 48, 0.47);" class="sub-text mb-5">Saldo Kamu</span>
            <div class="flex align-items-tengah mb-5 mt-5">
                <div class="badge-biru mr-3">
                    Rp
                </div>
                <h4 class="balance mr-3" id="saldo"></h4>
            </div>
            <div class="flex mb-5">
                <div class="button-biru btn-full mr-3 flex align-items-tengah">
                    <div class="badge-putih mr-6 ">
                        <i class="ri-arrow-down-s-fill"></i>
                    </div>
                    <a href="topup.php" style="text-decoration: none; color:#fff;">
                        <span>Top Up</span>
                    </a>
                </div>
                <div class="button-biru btn-full mr-3 flex align-items-tengah">
                    <div class="badge-putih mr-6 ">
                        <i class="ri-arrow-up-s-fill"></i>
                    </div>
                    <a href="tf.php" style="text-decoration: none; color:#fff;">
                        <span>Transfer</span>
                    </a>

                </div>
            </div>
            <br>
            <div class="flex">
                <span style="font-weight:600; color: rgba(0, 8, 48, 0.47);" class="sub-text mb-5 mr-2">Transaksi</span>
                <span class="sub-text">🤝</span>
            </div>
            <table class="table-trx">
              
            </table>
        </div>


    </div>
    <div class="nav">
        <a class="mr-10 nav-act" href="dashboard.php">
            <i class="ri-dashboard-line"></i>
        </a>
        <a class="mr-10 abu-nav" href="nebeng.php">
            <i class="ri-route-line"></i>
        </a>
        <a class="mr-10 badge-gradien-biru-2" href="qr-scan.php">
            <i class="ri-qr-scan-line"></i>
        </a>
        <a class="mr-10 abu-nav" href="nitip.php">
            <i class="ri-open-arm-line"></i>
        </a>
        <a class="mr-10 abu-nav" href="profil.php">
            <i class="ri-user-line"></i>
        </a>
    </div>
    <div class="notif bg-biru" id="notif">
        <p></p>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
            $(document).ready(function() {
            setInterval(function() {
                $('.table-trx').load("trx.php").fadeIn("slow");
            }, 500);
        });
    <?php
        if(isset($_GET['pesan'])){
    ?>
    document.getElementById("notif").innerHTML = '<i class="ri-notification-line"></i>&ensp;<?= $_GET['pesan'] ?>';
    document.getElementById("notif").classList.add("act-n");
    setTimeout(()=>{
        document.getElementById("notif").style = "animation-name: notif-a; animation-duration: 1s; transform: translateY(-20vw);"
    },1000);

    <?php
    }
    ?>
    function numberWithCommas(x) {
        var parts = x.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        return parts.join(".");
    }
    document.getElementById("saldo").innerHTML = numberWithCommas(<?php echo $ruser['saldo'] ?>)
</script>

</html>