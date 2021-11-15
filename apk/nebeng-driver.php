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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>SIMONEY || GET IN TOUCH WITH US</title>
</head>

<body>
    <div class="page">
        <div class="card-mobile mb-5">
            <div class="text-align-tengah mb-5">
                <div class="flex">
                    <div style="margin-right: 23vw;" class="badge-biru">
                        <a href="server/offdriver.php" style="text-decoration: none; color:#fff;">
                            <i style="font-size: 5vw; font-weight:600;" class="ri-shut-down-line"></i>
                        </a>
                    </div>
                    <span style="font-weight:700; font-size:5vw;">SINEBENG</span>
                </div>
                <br>
                <br>
                <p style="font-weight: 600; font-size:4vw;
                color: #9e9e9e;">Ada Penumpang yang order nih<br> Selamat bercuan</p>
            </div>
            <div class="flex justify-content-between mb-5">
                <div class="flex align-items-tengah biru">
                    <i class="ri-group-fill mr-3"></i>
                    <p id="jumlah-orang"><</p>
                </div>
                <i class="ri-filter-3-line biru"></i>
            </div>

            <div id="load-client"></div>

            <a style="text-decoration: none;" href="nebeng-cuan-update.php">
                <div style="height: 13vw; width:92%; margin-left:3vw; margin-top:110vw;" class="button-biru-2 btn-nebeng text-align-tengah mt-10 mb-5">
                    Atur profil anda
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
    <div class="notif bg-biru" id="notif">
        <p></p>
    </div>
    <script>
        $(document).ready(function() {
            setInterval(function() {
                $('#load-client').load("fetch.php").fadeIn("slow");
                 <?php
                $listClient = mysqli_query($koneksi, "SELECT * FROM nebeng_client WHERE driverid='$_SESSION[userid]'");
                $jumlah = mysqli_num_rows($listClient);
                ?>
                document.getElementById("jumlah-orang").innerHTML = "<?= $jumlah ?> Orang";
            }, 100);
            
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
    </script>
</body>

</html>