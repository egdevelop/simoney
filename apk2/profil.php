<?php
include "server/header.php";

$dataUser = mysqli_query($koneksi ,"SELECT * FROM user WHERE userid = '$_SESSION[userid]'");
$ruser = mysqli_fetch_array($dataUser);

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
  <div class="page">
    <div class="card-mobile mb-5">
      <div class="text-align-tengah mb-5">
        <span style="font-weight:600;" class="sub-text">Detail Akun</span>
      </div>
      <div class="flex detail-item justify-content-between"">
            <p>Nama Akun</p>
            <p><?= $ruser['nama'] ?></p>
        </div>
        <div class=" flex detail-item justify-content-between"">
        <p>Nomor Akun</p>
        <p><?= $_SESSION['userid'] ?></p>
      </div>
      <div class="flex detail-item justify-content-between"">
            <p>Masa Aktif</p>
            <p>09.11.2021</p>
        </div>
        <div class=" flex detail-item justify-content-between"">
        <p>Edit Profil <i class="ri-edit-line"></i></p>
      </div>
      <div class="flex detail-item justify-content-between"">
        <a style="text-decoration: none; color:#9e9e9e;" href="server/logout.php">
            <p>Logout <i class=" ri-logout-box-line"></i></p>
        </a>
      </div>
      <div class="border-pembatas mb-5"></div>
      <span style="font-weight:600; color: rgba(0, 8, 48, 0.47);" class="sub-text mb-5">Saldo Kamu</span>
      <div class="flex justify-content-between align-items-tengah">
        <div class="flex align-items-tengah mb-5 mt-3">
          <div class="badge-biru mr-3">
            Rp
          </div>
          <h4 class="balance mr-3" id="saldo"></h4>
        </div>
        <div class="flex">
          <span style="font-weight:500; color:#9e9e9e;">2019-2021 <i class="ri-arrow-down-s-fill"></i></span>
        </div>
      </div>
      <div id="chart"></div>
    </div>


  </div>
  <div class="nav">
    <a class="mr-10 abu-nav" href="dashboard.php">
      <i class="ri-dashboard-line"></i>
    </a>
    <a class="mr-10 abu-nav" href="nebeng.php">
      <i class="ri-route-line"></i>
    </a>
    <a class="mr-10 badge-gradien-biru-2" href="#">
      <i class="ri-qr-scan-line"></i>
    </a>
    <a class="mr-10 abu-nav" href="nitip.php">
      <i class="ri-open-arm-line"></i>
    </a>
    <a class="mr-10 nav-act" href="profil.php">
      <i class="ri-user-line"></i>
    </a>
  </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
  function numberWithCommas(x) {
    var parts = x.toString().split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    return parts.join(".");
}
document.getElementById("saldo").innerHTML = numberWithCommas(<?php echo $ruser['saldo'] ?>)
</script>
<script>
  var options = {
    series: [{
      data: [{
          x: new Date(1538778600000),
          y: [6629.81, 6650.5, 6623.04, 6633.33]
        },
        {
          x: new Date(1538780400000),
          y: [6632.01, 6643.59, 6620, 6630.11]
        },
        {
          x: new Date(1538782200000),
          y: [6630.71, 6648.95, 6623.34, 6635.65]
        },
        {
          x: new Date(1538784000000),
          y: [6635.65, 6651, 6629.67, 6638.24]
        },
        {
          x: new Date(1538785800000),
          y: [6638.24, 6640, 6620, 6624.47]
        },
        {
          x: new Date(1538787600000),
          y: [6624.53, 6636.03, 6621.68, 6624.31]
        },
        {
          x: new Date(1538789400000),
          y: [6624.61, 6632.2, 6617, 6626.02]
        },
        {
          x: new Date(1538791200000),
          y: [6627, 6627.62, 6584.22, 6603.02]
        },
        {
          x: new Date(1538793000000),
          y: [6605, 6608.03, 6598.95, 6604.01]
        },
        {
          x: new Date(1538794800000),
          y: [6604.5, 6614.4, 6602.26, 6608.02]
        },
        {
          x: new Date(1538796600000),
          y: [6608.02, 6610.68, 6601.99, 6608.91]
        },
        {
          x: new Date(1538798400000),
          y: [6608.91, 6618.99, 6608.01, 6612]
        },
        {
          x: new Date(1538800200000),
          y: [6612, 6615.13, 6605.09, 6612]
        },
        {
          x: new Date(1538802000000),
          y: [6612, 6624.12, 6608.43, 6622.95]
        },
        {
          x: new Date(1538803800000),
          y: [6623.91, 6623.91, 6615, 6615.67]
        },

      ]
    }],
    chart: {
      toolbar: {
        show: false,
      },
      type: 'candlestick',
      height: 290,
    },
    xaxis: {
      type: 'datetime',
    },
    yaxis: {
      tooltip: {
        enabled: true
      },
      labels: {
        show: false,
      },
    }
  };

  var chart = new ApexCharts(document.querySelector("#chart"), options);
  chart.render();
</script>

</html>