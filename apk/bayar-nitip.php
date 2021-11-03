<?php
include "server/header.php";
$dataPesanan = mysqli_query($koneksi,"SELECT * FROM nitip_client WHERE clientid = '$_SESSION[userid]' ORDER BY id DESC");
$r = mysqli_fetch_array($dataPesanan);
$dataKurir = mysqli_query($koneksi,"SELECT * FROM sinitip WHERE userid='$r[kuririd]'");
$d = mysqli_fetch_array($dataKurir);

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
            <p style="font-weight: 600;" id="saldo"></p>
        </div>
        <br>
        <!-- <div id="tunai" onclick="paymentToggle('tunai','simoney')" style="font-weight: 600; color: #b0b0b0;" class="flex mt-3 mb-5 align-items-tengah">
            <i class="ri-copper-coin-line"></i>
            <span class="ml-3">Tunai</span>
        </div> -->
        <span style="font-weight: 500;" class="mb-3">Nominal</span>
        <div class="flex align-items-tengah mb-10 mt-3">
            <div class="badge-biru mr-3">
                Rp
            </div>
            <h4 class="balance mr-3">18.500</h4>
        </div>
        <div class="flex justify-content-between mb-5 align-items-tengah">
            <span style="color: #b0b0b0;" class="ml-3">Makanan</span>
            <p style="font-weight: 600;" id="total-harga"></p>
        </div>
        <div id="list-makanan">

        </div>

        <div class="flex justify-content-between mb-5 align-items-tengah">
            <span style="color: #b0b0b0;" class="ml-3">Upah</span>
            <p style="font-weight: 600;" id="upah"></p>
        </div>
        <div class="flex justify-content-between mb-5 align-items-tengah">
            <span style="color: #b0b0b0;" class="ml-3">Pajak</span>
            <p style="font-weight: 600;">Gratis</p>
        </div>
        <div class="flex justify-content-between mb-5 align-items-tengah">
            <span style="color: #b0b0b0;" class="ml-3">Jumlah</span>
            <p style="font-weight: 600;" id="jumlah"></p>
        </div>
        <a style="text-decoration: none;" id="pinAction">
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
    function numberWithCommas(x) {
        var parts = x.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        return parts.join(".");
    }

    var raw = JSON.stringify(<?= $r['pesanan'] ?>);
    var pesanan = JSON.parse(raw);
    var totalHarga = 0;

    var listContainer = document.createElement("div");
    listContainer.className = "flex justify-content-between mb-5 align-items-tengah";

    var listSpan = document.createElement("span");
    listSpan.className = "ml-3";
    listSpan.style = "font-size:4vw;";

    var listP = document.createElement("p");
    listP.style = "font-size:4vw;";

    for(var i = 0; i < Object.keys(pesanan).length;i++){
        totalHarga += Number(pesanan['pesanan'+i]['harga']);
        listSpan.id = "makanan-nama"+i;
        listP.id = "makanan-harga"+i;
        listContainer.appendChild(listSpan);
        listContainer.appendChild(listP);
        document.getElementById("list-makanan").innerHTML += listContainer.outerHTML;
    }
    for(var i = 0; i < Object.keys(pesanan).length;i++){
        document.getElementById("makanan-nama"+i).innerHTML= pesanan['pesanan'+i]['nama'];
        document.getElementById("makanan-harga"+i).innerHTML= "Rp" + numberWithCommas(pesanan['pesanan'+i]['harga']);
    }
    document.getElementById('total-harga').innerHTML = "Rp."+numberWithCommas(totalHarga);
    document.getElementById('upah').innerHTML = "Rp."+numberWithCommas(<?= $d['upah'] ?>);
    document.getElementById('jumlah').innerHTML = "Rp."+numberWithCommas(totalHarga + <?= $d['upah'] ?>);
    document.getElementById('saldo').innerHTML = "Rp."+numberWithCommas(<?= $ruser['saldo'] ?>);

    
        var typePembayaran = "simoney";
    if (typePembayaran == "simoney") {
        var data = {
            link: "server/bayar-nitip-simoney.php",
            kuririd: <?= $r['kuririd'] ?>,
            userid: <?= $_SESSION['userid'] ?>,
            jumlah: totalHarga + <?= $d['upah'] ?>,
            id_pesanan: "<?= $r['id'] ?>",
        }
        document.getElementById("pinAction").href = "pin.php?link=" + JSON.stringify(data);
    }

    console.log(totalHarga);
    function paymentToggle(a,b){
        document.getElementById(a).style.color = "#404664";
        document.getElementById(b).style.color = "#b0b0b0";
    }
</script>

</html>