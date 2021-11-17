<?php
include "server/header.php";

$detailDriver = mysqli_query($koneksi, "SELECT * FROM sinebeng WHERE userid = '$_GET[driverid]'");
$r = mysqli_fetch_array($detailDriver);

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
    <div class="card-mobile mb-5">
        <div class="text-align-tengah mb-3">
            <div class="flex mb-5">
                <a href="detail-driver.php?driverid=<?= $_GET['driverid'] ?>" style="text-decoration: none;">
                    <div style="margin-right: 23vw;" class="badge-biru">
                        <i style="font-size: 5vw; font-weight:600;" class="ri-arrow-left-s-line"></i>
                    </div>
                </a>
                <span style="font-weight:700; font-size:5vw;">SINEBENG</span>
            </div>
            <br>
        </div>
        <span style="font-weight: 500;" class="mb-3">Pilih Pembayaran</span>
        <div id="simoney" onclick="paymentToggle('simoney','tunai')" class="flex justify-content-between align-items-tengah">
            <div style="font-weight: 600;" class="flex mt-3 align-items-tengah">
                <i class="ri-wallet-line"></i>
                <span class="ml-3">SIMONEY</span>
            </div>
            <p style="font-weight: 600;">Rp.<?= $ruser['saldo'] ?></p>
        </div>
        <div style="display: none;" id="tunai" onclick="paymentToggle('tunai','simoney')" style="font-weight: 600; color: #b0b0b0;" class="flex mt-3 mb-5 align-items-tengah">
            <i class="ri-copper-coin-line"></i>
            <span class="ml-3">Tunai</span>
        </div>
        <br>
        <span style="font-weight: 500;" class="mb-3">Nominal</span>
        <div class="flex align-items-tengah mb-10 mt-3">
            <div class="badge-biru mr-3">
                Rp
            </div>
            <h4 class="balance mr-3"><?= $r['tarif'] ?></h4>
        </div>
        <div class="flex justify-content-between mb-5 align-items-tengah">
            <span style="color: #b0b0b0;" class="ml-3">Tarif</span>
            <p style="font-weight: 600;"><?= $r['tarif'] ?></p>
        </div>
        <div class="flex justify-content-between mb-10 align-items-tengah">
            <span style="color: #b0b0b0;" class="ml-3">Pajak</span>
            <p style="font-weight: 600;">Gratis</p>
        </div>
        <div class="flex justify-content-between mb-5 align-items-tengah">
            <span style="color: #b0b0b0;" class="ml-3">Jumlah</span>
            <p style="font-weight: 600;"><?= $r['tarif'] ?></p>
        </div>
        <a style="text-decoration: none;" id="pinAction">
            <div style="height: 13vw; width:92%; margin-left:3vw; margin-top:20vw;" class="button-biru-2 btn-nebeng text-align-tengah mt-10 mb-5">
                Bayar Sekarang
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js" integrity="sha256-/H4YS+7aYb9kJ5OKhFYPUjSJdrtV6AeyJOtTkw6X72o=" crossorigin="anonymous"></script>
<script>
    var typePembayaran = "simoney";
    if (typePembayaran == "simoney") {
        var data = {
            link: "server/bayar-nebeng-simoney.php",
            driverid: <?= $_GET['driverid'] ?>,
            userid: <?= $_SESSION['userid'] ?>,
            jumlah: <?= $r['tarif'] ?>,
            namac: "<?= $ruser['nama'] ?>",
        }
        document.getElementById("pinAction").href = "pin.php?link=" + JSON.stringify(data);
    }

    function paymentToggle(a, b) {
        typePembayaran = a;
        document.getElementById(a).style.color = "#404664";
        document.getElementById(b).style.color = "#b0b0b0";
        if (typePembayaran == "simoney") {
            var data = {
                link: "server/bayar-nebeng-simoney.php",
                driverid: <?= $_GET['driverid'] ?>,
                userid: <?= $_SESSION['userid'] ?>,
                jumlah: <?= $r['tarif'] ?>,
                namac: "<?= $ruser['nama'] ?>",
            }
            document.getElementById("pinAction").href = "pin.php?link=" + JSON.stringify(data);
        } else {
            var data = {
                link: "server/bayar-nebeng-tunai.php",
                driverid: <?= $_GET['driverid'] ?>,
                userid: <?= $_SESSION['userid'] ?>,
                jumlah: <?= $r['tarif'] ?>,
                namac: "<?= $ruser['nama'] ?>",
            }
            document.getElementById("pinAction").href = "pin.php?link=" + JSON.stringify(data);
        }
    }
</script>

</html>