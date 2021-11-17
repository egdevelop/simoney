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
                <a href="dashboard.php" style="text-decoration: none;">
                    <div style="margin-right: 27vw;" class="badge-biru">
                        <i style="font-size: 5vw; font-weight:600;" class="ri-arrow-left-s-line"></i>
                    </div>
                </a>
                <span style="font-weight:700; font-size:5vw;">Transfer</span>
            </div>
            <br>
            <span style="font-weight: 600; margin-top:10vw;">Mau kirim <span class="biru">kemana?</span></span>
        </div>
        <br>
        <p style="font-weight: 500;  font-size:4.5vw; color: #b0b0b0;" class="mb-3">Tujuan</p>
            <input onchange="onChangeForm()" id="inputNomor" style="width: 100%; padding: 4vw; border-radius:10px; border:solid 1px #2972FF;" type="number" name="toid" placeholder="Nomor akun tujuan...">
            <div id="nama-akun" style="display: none;" class="mt-3 bagde-tf">
                <p id="nama_akun"></p>
            </div>
            <div id="formTf"></div>
    </div>
</body>
<?php
include "server/header.php";

$dataUser = mysqli_query($koneksi, "SELECT * FROM user WHERE userid = '$_SESSION[userid]'");
$ruser = mysqli_fetch_array($dataUser);

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>

function onChangeForm(){
    if (document.getElementById("inputNomor").value == <?= $_SESSION["userid"]; ?>) {
        document.getElementById("nama-akun").style.display = "block";
        document.getElementById("nama_akun").innerHTML = "Ini nomor akun anda sendiri";
        document.getElementById("formTf").innerHTML = '<button style="margin-top: 40vh; display:none;" class="button-putih-2 bg-putih btn-nebeng text-align-tengah mt-5 mb-5">Konfirmasi</button>';
    }
    else {
    $.ajax({
                url: "server/cekid.php",
                type: "POST",
                data: {
                    userid: document.getElementById("inputNomor").value,
                },
                success: function(response) {
                   if(response != "Nomor akun tidak ditemukan"){
                       document.getElementById("nama-akun").style.display = "block";
                       document.getElementById("nama_akun").innerHTML = response;
                       document.getElementById("formTf").innerHTML = '<a href="tf2.php?toid='+ document.getElementById("inputNomor").value +'"><button type="button" style="margin-top: 40vh;" class="button-putih-2 bg-putih btn-nebeng text-align-tengah mt-5 mb-5">Konfirmasi</button></a>'; 
                   }else{
                       document.getElementById("nama-akun").style.display = "block";
                       document.getElementById("nama_akun").innerHTML = "Nomor akun tidak ditemukan";
                   }
                },
                error: function() {
                    alert("error");
                }

            });
}}
</script>

</html>