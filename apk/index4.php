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
<img style="position:absolute; width:90vw; transform: translate(2vw,3vw);" src="assets/img/boarding-4.png" alt="corak">
<div style="position:absolute; margin-top: 130vw; text-align:center; width:100vw; padding:5vw; color:#fff;">
    <img class="mb-5" style="width: 30vw;" src="assets/img/logo-light.png" alt="logo">
    <br>
    <p style="font-size: 4vw; font-weight:400;">Dapatkan pendapatan dan atur pengeluaranmu sekarang</p>
</div>
<div class="flex justify-content-between" style="position:absolute; margin-top: 90vh;">
<a href="login.php" style="text-decoration:none; width:45vw; font-size:5vw; color:#fff; padding: 3vw;" class="text-align-tengah">
    Login
</a>
<a href="sorry2.php" style="text-decoration:none; width:45vw; background-color:#fff; font-size:5vw; color:#2972ff; border-radius:10px; padding: 3vw;" class="text-align-tengah">
    Sign Up
</a>
</div>

</body>
<script>
    
</script>

</html>