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
        <div class="text-align-tengah">
            <span style="font-weight:700; font-size:5vw;">SIMONEY</span>
            <div class="mb-10" style="color: #fff;">.</div>
            <h3 id="nominal" style="color: #232F6B;"></h3>
            <p class="mb-13" style="font-size: 3vw; color: #b0b0b0;">Ini QR CODE kamu silahkan ke kopsis dan selesaikan pembayaran</p>
            <div style="margin-left: 13vw;">
                <div id="qrcode"></div>
            </div>
            <br>
            <br>
            <a style="text-decoration: none;" href="dashboard.php">
                <div class="button-putih-2 btn-nebeng text-align-tengah mt-5 mb-5">
                    Selesai
                </div>
            </a>
        </div>
    </div>
    </div>
</body>
<script src="assets/js/qrcode.js"></script>
<script type="text/javascript">
    var url_string = window.location.href;
    var url = new URL(url_string);
    var qr = url.searchParams.get("qr");
    var qrjson = JSON.parse(qr);
    new QRCode(document.getElementById("qrcode"), "https://simoney.hstki.org/apk/server/topup.php?userid=" + qrjson.userid + "&jumlah=" + qrjson.jumlah);

    function numberWithCommas(x) {
        var parts = x.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        return parts.join(".");
    }
    document.getElementById("nominal").innerHTML = "Rp" + numberWithCommas(<?php echo $_GET['n'] ?>)
</script>

</html>