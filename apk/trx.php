<?php
include "server/header.php";
$dataHistory = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE userid = '$_SESSION[userid]' ORDER BY id DESC LIMIT 10");

                while ($d = mysqli_fetch_array($dataHistory)) {
                    if ($d['type'] == 0) {
                        $icon = "up";
                        $des = "Uang Keluar dari Transfer";
                    } elseif ($d['type'] == 1) {
                        $icon = "down";
                        $des = "Uang Masuk dari Transfer";
                    } elseif ($d['type'] == 2) {
                        $icon = "up";
                        $des = "Uang Keluar dari SINEBENG";
                    } elseif ($d['type'] == 3) {
                        $icon = "down";
                        $des = "Uang Masuk dari SINEBENG";
                    } elseif ($d['type'] == 4) {
                        $icon = "up";
                        $des = "Uang Keluar dari SINITIP";
                    } elseif ($d['type'] == 5) {
                        $icon = "down";
                        $des = "Uang Masuk dari SINITIP";
                    }
        echo '
                    <tr>
                        <td class="row-icon">
                            <div class="badge-biru-muda-2">
                                <i class="ri-arrow-'.$icon.'-s-line"></i>
                            </div>
                        </td>
                        <td>
                            <p class="trx-text mr-5">'.$des.'</p>
                            <p class="trx-time">'.$d['tanggal'].'</p>
                        </td>
                        <td>
                            <p class="trx-time" id="jumlahtrx">Rp. '.$d['jumlah'].'</p>
                        </td>
                    </tr>
';
                }