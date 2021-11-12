<?php
include "server/header.php";
$dataKurir = mysqli_query($koneksi, "SELECT * FROM sinitip WHERE status = '1'");
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
                <a href="nitip.php" style="text-decoration: none;">
                    <div style="margin-right: 27vw;" class="badge-biru">
                        <i style="font-size: 5vw; font-weight:600;" class="ri-arrow-left-s-line"></i>
                    </div>
                </a>
                <span style="font-weight:700; font-size:5vw;">SINITP</span>
            </div>
            <img class="mt-5 mb-5" src="assets/img/atas-icon-nitip.png" alt="atas">
            <div class="flex justify-content-between mb-5">
                <div class="flex align-items-tengah">
                    <i class="ri-search-line mr-3 biru"></i>
                    <input class="search" type="text" placeholder="Search">
                </div>
                <i class="ri-filter-3-line biru"></i>
            </div>
        </div>
        <div class="konten-nebeng-client">
            <?php
            while ($r = mysqli_fetch_array($dataKurir)) {
            ?>
                <div class="card-nenbeng-client listSearch">
                    <div class="flex align-items-tengah">
                        <div style="width:70%;" class="flex align-items-tengah justify-content-between">
                            <div class="text-waa">
                                <span style="font-size: 4vw; font-weight:500;"><?= $r['nama'] ?></span>
                                <div style="font-size: 2.5vw;" class="flex align-items-tengah">
                                    <i class="ri-map-pin-line mr-2"></i>
                                    <p><?= $r['lokasi'] ?></p>
                                </div>
                            </div>
                            <p style="font-size: 3vw;">Rp. <?= $r['upah'] ?></p>
                        </div>
                        <a style="text-decoration: none; color:#fff;" href="detail-kurir.php?kuririd=<?= $r['userid'] ?>" class="btn-pilih-in text-align-tengah ml-5">
                            Pesan
                        </a>
                    </div>
                </div>
            <?php
            }
            ?>
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

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(function($) {

            $('.listSearch').each(function() {
                $(this).attr('searchData', $(this).text().toLowerCase());
            });
            $('.search').on('keyup', function() {
                var dataList = $(this).val().toLowerCase();
                $('.listSearch').each(function() {
                    if ($(this).filter('[searchData *= ' + dataList + ']').length > 0 || dataList.length < 1) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });

        });
    </script>
</body>

</html>