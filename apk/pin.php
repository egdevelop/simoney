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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>SIMONEY || GET IN TOUCH WITH US</title>
</head>

<body>
    <div class="card-mobile mb-5">
        <div class="text-align-tengah mb-5 mt-5">
        <div class="flex mb-5">
                <a onclick="window.history.go(-1); return false;" style="text-decoration: none;">
                    <div style="margin-right: 27vw;" class="badge-biru">
                        <i style="font-size: 5vw; font-weight:600;" class="ri-arrow-left-s-line"></i>
                    </div>
                </a>
                <span style="font-weight:700; margin-left: -7vw; font-size:5vw;">Masukkan Pin</span>
            </div>
        </div>
        <div class="flex justify-content-between pin-wrapper" id="titik-wrap">
            <div id="titik-1" class="titik-pin bg-abu"></div>
            <div id="titik-2" class="titik-pin bg-abu"></div>
            <div id="titik-3" class="titik-pin bg-abu"></div>
            <div id="titik-4" class="titik-pin bg-abu"></div>
            <div id="titik-5" class="titik-pin bg-abu"></div>
            <div id="titik-6" class="titik-pin bg-abu"></div>
        </div>
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
            <div id="pinVerif" class="button-putih-2 btn-nebeng text-align-tengah mt-5 mb-5">
                Konfirmasi
            </div>
    </div>
    <div class="notif bg-red" id="notif">
        <p></p>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js" integrity="sha512-E8QSvWZ0eCLGk4km3hxSsNmGWbLtSCSUcewDQPQWZF6pEU8GlT8a5fF32wOl1i8ftdMhssTrF/OhyGWwonTcXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
var value = []
var finalString = "";
function keypad (a){
    if(a == "back"){
        value.pop();
        var j = value.length + 1;
        document.getElementById("titik-"+j).classList.remove("bg-biru");
        document.getElementById("titik-"+j).classList.add("bg-abu");
    }else{
        if(value.length < 6){
        value.push(a);
        finalString  = value.join("");
        document.getElementById("titik-"+value.length).classList.add("bg-biru");
        document.getElementById("titik-"+value.length).classList.remove("bg-abu");
        }
    }
}
var url_string = window.location.href;
var url = new URL(url_string);
var action = url.searchParams.get("link");
var datas = JSON.parse(action);

document.getElementById("pinVerif").addEventListener("click",()=>{
 $.ajax({
                url: "server/pin.php",
                type: "POST",
                data: {
                    pin: finalString,
                    userid: <?php echo $_SESSION['userid'] ?>,
                },
                success: function(response) {
                    if(response == 1){
                        pushAction();
                    }else{
                        document.getElementById("notif").innerHTML = '<i class="ri-notification-line"></i>&ensp;Pin Yang Anda Masukan Salah';
                        document.getElementById("notif").classList.add("act-n");
                        document.getElementById("titik-wrap").classList.add("animate__animated");
                        document.getElementById("titik-wrap").classList.add("animate__shakeX");
                        for(var i = 1; i <= 6; i++){
                            document.getElementById("titik-"+i).classList.add("bg-merah");
                            document.getElementById("titik-"+i).classList.remove("bg-biru");
                        }
                        setTimeout(()=>{
                            document.getElementById("notif").style = "animation-name: notif-a; animation-duration: 1s; transform: translateY(-20vw);"
                        },1000);
                        setTimeout(()=>{
                            location.reload();
                        },2000);
                    }
                },
                error: function() {
                    alert("error");
                }

            });

})

function pushAction(){
    $.ajax({
                url: datas.link,
                type: "POST",
                data: datas,
                success: function(response) {
                    if(response != ''){
                        var responeJson = JSON.parse(response);
                        window.location.href = "succes-bayar.php?href="+responeJson.href+"&type="+responeJson.type;
                    }else{
                        console.log(response);
                    }
                },
                error: function() {
                    alert("error");
                }

            });
}
</script>

</html>