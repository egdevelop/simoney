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
    <br>
<a href="index4.php" class="mb-5" style=" text-decoration: none; color:#fff;">
    <i style="font-size: 10vw;  padding:3vw;" class="ri-arrow-left-s-line"></i>
</a>
<div style="color: #fff; padding:5vw;" class="mb-5">
    <h1 style="font-weight: 600;">Ayo masuk.</h1>
    <p style="font-size: 5vw;">Selamat datang kembali kami sangat merindukanmu</p>
</div>

<form class="form-login" action="server/login.php" method="post">
    <input type="text" name="username" placeholder="Masukan nismu...">
    <input type="password" name="password" placeholder="Masukan password..">
    <div class="text-align-tengah" style="color:#fff; margin-top: 23vh;">
    <p>Don’t have an account ? Sign Up</p>
    <button type="submit" class="button-putih-2 bg-putih btn-nebeng text-align-tengah mt-5 mb-5">Login</button>
    </div>
</form>

</body>
<script>

</script>

</html>