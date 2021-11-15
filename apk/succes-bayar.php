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
        </div>
            <div class="mb-10" style="color: #fff;">.</div>
            <h1 style="color: #232F6B; max-width:50vw; margin-left:8vw;">Pembayaran Selesai!</h1>
            <img class="mt-5 sukses-bayar" src="assets/img/sukses-bayar.png" alt="loading">

    </div>
    </div>
</body>
<script>
    var url = "<?php echo $_GET['href']; ?>" // membuat url tujuan
    var type = "<?php echo $_GET['type']; ?>" // membuat url tujuan
    var count = 3; // membuat hitungan kedalam detik
    function countDown() {
        if (count > 0) {
            count--;
            var waktu = count + 1;
            setTimeout("countDown()", 1000);
        } else {
            window.location.href = url+ "&type="+type;
        }
    }
    countDown();
</script>

</html>