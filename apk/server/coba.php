<?php
include "koneksi.php";
$b = urldecode($_GET['cari']);

$dataDriver = mysqli_query($koneksi, "SELECT * FROM sinebeng WHERE status = '1' AND (nama LIKE '%$_GET[cari]%' OR tujuan LIKE '%$_GET[cari]%' OR tarif LIKE '$_GET[cari]')");

$r = mysqli_fetch_array($dataDriver);
$jumlah = mysqli_num_rows($dataDriver);
echo $r['nama'];
echo "<br>";
echo $jumlah;