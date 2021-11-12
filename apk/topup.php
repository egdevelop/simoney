<?php
include "server/header.php";
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
        <div class="text-align-tengah mb-5 mt-5">
            <div class="flex mb-5">
                <a href="dashboard.php" style="text-decoration: none;">
                    <div style="margin-right: 27vw; " class="badge-biru">
                        <i style="font-size: 5vw; font-weight:600;" class="ri-arrow-left-s-line"></i>
                    </div>
                </a>
                <span style="font-weight:700; font-size:5vw; color: rgba(0, 8, 48, 0.75);">Topup</span>
            </div>
        </div>
        <br>
        <div class="text-align-tengah mb-10">
            <h1 style="color: rgba(0, 8, 48, 0.75);" id="value-money"></h1>
            <p style="color: #3B4374; font-weight:400; font-size:3vw;">Saldo kamu sekarang&ensp;<span style="font-weight: 600;">Rp100.000</span></p>
        </div>
        <br>
        <div class="pin-menu">
            <div class="flex justify-content-between mb-5">
                <div class="tombol-pin">
                    <span onclick="keypad(1)">1</span>
                </div>
                <div class="tombol-pin">
                    <span onclick="keypad(2)">2</span>
                </div>
                <div class="tombol-pin">
                    <span onclick="keypad(3)">3</span>
                </div>
            </div>
            <div class="flex justify-content-between mb-5">
                <div class="tombol-pin">
                    <span onclick="keypad(4)">4</span>
                </div>
                <div class="tombol-pin">
                    <span onclick="keypad(5)">5</span>
                </div>
                <div class="tombol-pin">
                    <span onclick="keypad(6)">6</span>
                </div>
            </div>
            <div class="flex justify-content-between mb-5">
                <div class="tombol-pin">
                    <span onclick="keypad(7)">7</span>
                </div>
                <div class="tombol-pin">
                    <span onclick="keypad(8)">8</span>
                </div>
                <div class="tombol-pin">
                    <span onclick="keypad(9)">9</span>
                </div>
            </div>
            <div class="flex justify-content-between mb-5">
                <div class="tombol-pin-2">
                    <span style="color:#fff;" id="btn-titik">.</span>
                </div>
                <div class="tombol-pin">
                    <span onclick="keypad(0)">0</span>
                </div>
                <div class="tombol-pin-2">
                    <i onclick="keypad('back')" class="ri-delete-back-2-line"></i>
                </div>
            </div>
        </div>
        <a style="text-decoration: none;" id="link-qr">
            <div class="button-putih-2 btn-nebeng text-align-tengah mt-5 mb-5">
                Konfirmasi
            </div>
        </a>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js" integrity="sha256-/H4YS+7aYb9kJ5OKhFYPUjSJdrtV6AeyJOtTkw6X72o=" crossorigin="anonymous"></script>
<script>
var value = []
document.getElementById("value-money").innerHTML = "Rp0";
function numberWithCommas(x) {
    var parts = x.toString().split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    return parts.join(".");
}
function keypad (a){
    if(a == "back"){
        value.pop(); 
    }else{
        if (value.length == 0){
            if(a == 0){

            }else{
                if(value.length < 10){
                value.push(a);
                }
            }
        }else{
            if(value.length < 10){
            value.push(a);
            }
        }
    }

    if(value.length != 0){
        let finalString  = value.join("");
        let message = {
            jumlah : finalString,
            userid : <?php echo $_SESSION['userid'] ?>
        }
        document.getElementById("link-qr").href = "topup-qr.php?qr=" + JSON.stringify(message) + "&n=" + finalString;
        document.getElementById("value-money").innerHTML = "Rp"+numberWithCommas(finalString);
    }else{
        document.getElementById("value-money").innerHTML = "Rp0";

    }

}
</script>

</html>