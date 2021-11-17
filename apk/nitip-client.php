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

                <!-- <select class="price-sorting">
                    <option>Urutkan</option>
                    <option value="l2h">Terendah </option>
                    <option value="h2l">Tertinggi </option>
                </select> -->

            </div>
        </div>
        <div class="konten-nebeng-client">

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

        </div>
        <div class="notif bg-biru" id="notif">
        <p></p>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
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
        $(document).ready(function() {
            setInterval(function() {

                var dataList = $('.search').val().toLowerCase();
                dataList1 = encodeURIComponent(dataList.trim())
                $('.konten-nebeng-client').load("nitip-client-fetch.php?cari=" + dataList1).fadeIn("slow");

            }, 500);
        });
        // Sort Price
        $(document).on("change", ".price-sorting", function() {
            var sortingMethod = $(this).val();
            if (sortingMethod == 'l2h') {
                sortProductsPriceAscending();
            } else if (sortingMethod == 'h2l') {
                sortProductsPriceDescending();
            }
        });

        function getAmount(price) {
            return parseFloat(price.replace('$', ''));
        }

        function sortProductsPriceAscending() {
            var products = $('.productbox');
            products.sort(function(a, b) {
                return getAmount($(a).children('.price').text()) - getAmount($(b).children('.price').text())
            });
            $(".products-grid").html(products);
        }

        function sortProductsPriceDescending() {
            var products = $('.productbox');
            products.sort(function(a, b) {
                return getAmount($(b).children('.price').text()) - getAmount($(a).children('.price').text())
            });
            $(".products-grid").html(products);
        }
    </script>
</body>

</html>