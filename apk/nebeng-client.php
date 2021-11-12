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
        <div class="text-align-tengah mb-5">
            <div class="flex mb-5">
                <a href="nebeng.php" style="text-decoration: none;">
                    <div style="margin-right: 23vw;" class="badge-biru">
                        <i style="font-size: 5vw; font-weight:600;" class="ri-arrow-left-s-line"></i>
                    </div>
                </a>
                <span style="font-weight:700; font-size:5vw;">SINEBENG</span>
            </div>
            <img class="mt-5 mb-5" src="assets/img/atas-icon-nebeng.png" alt="atas">
            <div class="flex justify-content-between mb-5">
                <div class="flex align-items-tengah">
                    <i class="ri-search-line mr-3 biru"></i>
                    <p>Search</p>
                </div>
                <i class="ri-filter-3-line biru"></i>
            </div>
        </div>
        <div class="konten-nebeng-client">
            
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
            $(document).ready(function() {
            setInterval(function() {
                $('.konten-nebeng-client').load("nebeng-client-fetch.php").fadeIn("slow");
            }, 500);
        });
</script>

</html>