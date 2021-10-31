<?php 
session_start();
include "koneksi.php";

if(isset($_SESSION['userid'])){
     header("location:dashboard.php");
}else{
   
}

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

<body class="bg-biru">
<img style="position:absolute; width:55vw; transform: translate(-16vw,-25vw);" src="assets/img/bg-boarding.png" alt="corak">
<img style="position:absolute; width:55vw; transform: translate(-5vw,55vw);" src="assets/img/bg-boarding.png" alt="corak">
<img style="position:absolute; width:55vw; transform: translate(68vw,75vw);" src="assets/img/bg-boarding-2.png" alt="corak">
<img style="position:absolute; width:55vw; transform: translate(62vw,-17vw);" src="assets/img/bg-boarding-2.png" alt="corak">
<img style="position:absolute; width:90vw; transform: translate(2vw,3vw);" src="assets/img/boarding-2.png" alt="corak">
<div style="position:absolute; margin-top: 120vw; width:60vw; padding:5vw; color:#fff;">
    <h2 style="font-weight: 600;">Semuanya aman bersama kami</h2>
    <br>
    <p style="font-size: 3vw; font-weight:400;">Semua transaksimu akan terdata sehingga 100% aman dari kehilangan</p>
</div>
<div class="flex align-items-tengah" style="position:absolute; margin-top: 90vh; padding:5vw;">
<div class="flex">
    <span style="width: 8vw; border-bottom:solid 1vw #b0b0b0; margin-right:1vw;"></span>
    <span style="width: 25vw; border-bottom:solid 1vw #fff; margin-right:1vw;"></span>
    <span style="width: 8vw; border-bottom:solid 1vw #b0b0b0; margin-right:1vw;"></span>
</div>
<a href="index3.php" style="text-decoration: none; color:#fff;">
<i style="color: #fff; font-size:7vw; margin-left:35vw;" class="ri-arrow-right-s-line"></i>
</a>
</div>

</body>
<script>
    
</script>

</html>