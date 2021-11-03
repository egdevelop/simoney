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
        <div class="text-align-tengah">
            <span style="font-weight:700; font-size:5vw;">SIMONEY</span>
            <div class="mb-10" style="color: #fff;">.</div>
            <h3 style="color: #232F6B;">SABAR YA!</h3>
            <p class="mb-13" style="font-size: 3vw; color: #b0b0b0;">Kita sedang menghubungkan ke room chat</p>
            <a href="chat.php"><img class="mt-5" src="assets/img/loading-2.gif" alt="loading"></a>
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
        <a class="mr-10 abu-nav" href="nitip.php">
            <i class="ri-open-arm-line"></i>
        </a>
        <a class="mr-10 abu-nav" href="profil.php">
            <i class="ri-user-line"></i>
        </a>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    var url_string = window.location.href;
    var url = new URL(url_string);
    var type = url.searchParams.get("type");
    var url2 = "<?= $_GET['href'] ?>" // membuat url tujuan

setInterval(()=>{
if(type == 'sinebeng'){
             $.ajax({
                url: "server/cek-nebeng.php",
                type: "POST",
                data: {
                    userid: <?php echo $_SESSION['userid'] ?>,
                },
                success: function(response) {
                    if(response == '1'){
                        console.log(response);
                        window.location.href = url2 + "&type=sinebeng";
                    }else{
                        console.log(response);
                    }
                },
                error: function() {
                    alert("error");
                }

            });
        }else if(type == "sinitip"){
            $.ajax({
                url: "server/cek-nitip.php",
                type: "POST",
                data: {
                    userid: <?php echo $_SESSION['userid'] ?>,
                },
                success: function(response) {
                    if(response == '1'){
                        console.log(response);
                        window.location.href = url2 + "&type=sinitip";
                    }else{
                        console.log(response);
                    }
                },
                error: function() {
                    alert("error");
                }

            });
        }
},1000);


    // 
    // var count = 3; // membuat hitungan kedalam detik
    // function countDown(a) {
    //     if (count > a) {
    //         count--;
    //         setTimeout("countDown()", 1000);
    //     } else {
    //         window.location.href = url;
    //     }
    // }
    // countDown();
</script>

</html>