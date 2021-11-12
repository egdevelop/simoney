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
                <a href="detail-kurir.php" style="text-decoration: none;">
                    <div style="margin-right: 27vw;" class="badge-biru">
                        <i style="font-size: 5vw; font-weight:600;" class="ri-arrow-left-s-line"></i>
                    </div>
                </a>
                <span style="font-weight:700; font-size:5vw;">SINITP</span>
            </div>
            <br>
            <span style="font-weight: 600; margin-top:10vw; color:#333850;">Mau <span class="biru">pesen</span> apa aja?</span>
        </div>
        <div style="margin-top: 15vw;">
            <p style="font-weight: 500;  font-size:4.5vw; color: #b0b0b0;" class="mb-3">List Makanan</p>
          <div id="pesanan">
            <div class="flex form-nitip-client" style="margin-bottom: 1vw;">
            <input class="form-nitip-1" type="text" name="pesanan0" placeholder="Cth : Mendoan X1">
            <input class="form-nitip-2" type="text" name="harga0" placeholder="Harga..">
          </div>
          </div>
            <div class="text-align-tengah">
                <div onclick="addPesanan()" style="margin-left: 40vw; width:10vw;" class="badge-biru">
                    <i style="font-size: 5vw; font-weight:600;" class="ri-add-line"></i>
                </div>
            </div>
            <p style="font-weight: 500;  font-size:4.5vw; color: #b0b0b0;" class="mb-3">Catatan</p>
            <textarea class="textarea-nitip" placeholder="Kirim ke mana ya...."></textarea>
            <div class="text-align-tengah">
                <a class="biru" href="bayar-nitip.php" style="font-weight: 600; text-decoration: none;">Lanjut&emsp;></a>
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
    var i = 1;
    var documentFragment = document.createDocumentFragment();
    const container = document.getElementById("pesanan");

    var formNitip1 = document.createElement("input");
    formNitip1.className = "form-nitip-1";
    formNitip1.type = "text";
    formNitip1.placeholder ="Cth : Mendoan X1";

    var formNitip2 = document.createElement("input");
    formNitip2.className = "form-nitip-2";
    formNitip2.type = "text";
    formNitip2.placeholder ="Harga..";

    var formNitipClient = document.createElement("div");
    formNitipClient.className = "flex form-nitip-client";
    formNitipClient.style.marginBottom = "1vw";
    formNitipClient.appendChild(formNitip1);
    formNitipClient.appendChild(formNitip2);

    function addPesanan(){
        formNitip1.name="pesanan"+i;
        formNitip2.name="harga"+i;
        container.innerHTML += formNitipClient.outerHTML;
        i++
    }
</script>

</html>