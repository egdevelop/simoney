<?php
include "server/header.php";
$dataDriver = mysqli_query($koneksi, "SELECT * FROM sinebeng WHERE status = '1'");
            while ($arrDriver = mysqli_fetch_array($dataDriver)) {
                echo'
                <div class="card-nenbeng-client">
                    <div class="flex align-items-tengah">
                        <div style="width:70%;" class="flex align-items-tengah justify-content-between">
                            <div class="text-waa">
                                <span style="font-size: 4vw; font-weight:500; color: #000830;">'.$arrDriver['nama'].'</span>
                                <div style="font-size: 2.5vw;" class="flex align-items-tengah">
                                    <i class="ri-map-pin-line mr-2"></i>
                                    <p style=" color: #000830;">'.$arrDriver['tujuan'].'</p>
                                </div>
                            </div>
                            <p style="font-size: 3vw;">Rp. '.$arrDriver['tarif'].'</p>
                        </div>
                        <div class="btn-pilih-in text-align-tengah ml-5">
                            <a style="text-decoration:none; color:#fff;" href="detail-driver.php?driverid='.$arrDriver['userid'].'"> Pesan</a>
                        </div>

                    </div>
                </div>
                ';
            }
            ?>