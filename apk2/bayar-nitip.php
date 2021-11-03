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
        <div class="text-align-tengah mb-3">
            <div class="flex mb-5">
                <a href="detail-pesanan.php" style="text-decoration: none;">
                    <div style="margin-right: 27vw;" class="badge-biru">
                        <i style="font-size: 5vw; font-weight:600;" class="ri-arrow-left-s-line"></i>
                    </div>
                </a>
                <span style="font-weight:700; font-size:5vw;">SINITIP</span>
            </div>
            <br>
        </div>
        <span style="font-weight: 500;" class="mb-3">Ini detail drivermu</span>
        <div id="simoney" onclick="paymentToggle('simoney','tunai')" class="flex justify-content-between align-items-tengah">
            <div  style="font-weight: 600;" class="flex mt-3 align-items-tengah">
                <i class="ri-wallet-line"></i>
                <span class="ml-3">SIMONEY</span>
            </div>
            <p style="font-weight: 600;">Rp.700.000</p>
        </div>
        <div id="tunai" onclick="paymentToggle('tunai','simoney')" style="font-weight: 600; color: #b0b0b0;" class="flex mt-3 mb-5 align-items-tengah">
            <i class="ri-copper-coin-line"></i>
            <span class="ml-3">Tunai</span>
        </div>
        <span style="font-weight: 500;" class="mb-3">Nominal</span>
        <div class="flex align-items-tengah mb-10 mt-3">
            <div class="badge-biru mr-3">
                Rp
            </div>
            <h4 class="balance mr-3">18.500</h4>
        </div>
        <div class="flex justify-content-between mb-5 align-items-tengah">
            <span style="color: #b0b0b0;" class="ml-3">Makanan</span>
            <p style="font-weight: 600;">Rp.15.000</p>
        </div>
        <div class="flex justify-content-between mb-5 align-items-tengah">
            <span style="font-size:4vw;" class="ml-3">Gehu x6</span>
            <p style="font-size:4vw;">Rp.6.000</p>
        </div>
        <div class="flex justify-content-between mb-5 align-items-tengah">
            <span style="font-size:4vw;" class="ml-3">Roti x2</span>
            <p style="font-size:4vw;">Rp.4.000</p>
        </div>
        <div class="flex justify-content-between mb-5 align-items-tengah">
            <span style="font-size:4vw;" class="ml-3">Ayam Geprek x1</span>
            <p style="font-size:4vw;">Rp.5.000</p>
        </div>

        <div class="flex justify-content-between mb-5 align-items-tengah">
            <span style="color: #b0b0b0;" class="ml-3">Upah</span>
            <p style="font-weight: 600;">Rp.10.000</p>
        </div>
        <div class="flex justify-content-between mb-5 align-items-tengah">
            <span style="color: #b0b0b0;" class="ml-3">Pajak</span>
            <p style="font-weight: 600;">Rp.500</p>
        </div>
        <div class="flex justify-content-between mb-5 align-items-tengah">
            <span style="color: #b0b0b0;" class="ml-3">Jumlah</span>
            <p style="font-weight: 600;">Rp.18.500</p>
        </div>
        <a style="text-decoration: none;" href="pin.php">
            <div style="height: 13vw; width:92%; margin-left:3vw; margin-top:10vw;" class="button-biru-2 btn-nebeng text-align-tengah mt-10 mb-5">
                Bayar Sekarang
            </div>
        </a>
    </div>
    </div>
    <div class="mb-13" style="color: #fff;">.</div>
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
<script>
    function paymentToggle(a,b){
        document.getElementById(a).style.color = "#404664";
        document.getElementById(b).style.color = "#b0b0b0";
    }
</script>

</html>