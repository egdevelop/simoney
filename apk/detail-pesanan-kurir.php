<?php
include "server/header.php";

$dataPesanan = mysqli_query($koneksi,"SELECT * FROM nitip_client WHERE clientid = '$_GET[clientid]' AND kuririd = '$_SESSION[userid]'");
$r = mysqli_fetch_array($dataPesanan);
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
            <span style="font-weight: 600; margin-top:10vw;">Ini detail <span class="biru">pesananmu</span></span>
        </div>
        <div style="margin-top: 15vw;">
            <p style="font-weight: 500;  font-size:4.5vw; color: #b0b0b0;" class="mb-3">Nama</p>
            <p style="font-weight: 500; font-size:4vw;" class="mb-10"><?= $r['nama'] ?></p>
            <p style="font-weight: 500;  font-size:4.5vw; color: #b0b0b0;" class="mb-3">Pesanan</p>
            <div id="list-makanan"></div>
            <p style="font-weight: 500;  font-size:4.5vw; color: #b0b0b0;" class="mb-3">Catatan</p>
            <p style="font-weight: 500; font-size:4vw;" class="mb-10"><?= $r['catatan'] ?></p>
            <div class="text-align-tengah">
                <a class="biru" href="server/nitip-kurir.php?clientid=<?= $_GET['clientid'] ?>" style="font-weight: 600; text-decoration: none;">Lanjut&emsp;></a>
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
</script>

</html>