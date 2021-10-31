<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css?<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="assets/img/fav.png" sizes="16x16" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Landing Page SIMONEY</title>
</head>

<body>
    <div class="body-wrapper">
        <div class="bg-biru">
            <!-- Navbar -->
            <div class="header-inner">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <a class="navbar-brand" href="index.php"><img class="image-logo" src="assets/img/logo-light.png" alt=""></a>
                        <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-1">
                                <li class="nav-item">
                                    <a class="menu-custom" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="menu-custom" href="#about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="menu-custom" href="#features">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="menu-custom" href="#tesstimonial">Testimonials</a>
                                </li>
                                <li class="nav-item">
                                    <a class="menu-custom" href="#contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <form class="d-flex">
                            <button class="btn btn-light" type="submit">Download</button>
                        </form>
                    </div>
                </nav>
            </div>

            <!-- Jumbotron -->
            <div class="container jumbotron">
                <div class="row">
                    <div class="col-md-7">
                        <h1 class="heading1-custom" style=" width: 100%;">Transfer kemana saja menjadi mudah bersama kami</h1>
                        <p class="desc1 putih">Atur pengeluaranmu bersama kami dan juga raih pendapatanmu bersama SINEBENG dan SINITIP</p>
                    </div>
                    <div class=" col-md-5">
                        <!-- <img class="img-fluid img-jumbotron" src="assets/img/ilustrasion1.png"> -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <img class="img-titik" src="assets/img/titik.png" alt="">
                    </div>
                    <div class="col-md-4">
                        <img class="img-hp" src="assets/img/hp.png" alt="">
                    </div>
                    <div class="col-md-2">
                        <img class="img-sip" src="assets/img/sip.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <img class="img-titik2" src="assets/img/titik-biru.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- About -->
        <section class="container produk">
            <h1 class="heading-about">About Us</h1>
            <div class="row">
                <div class="col-md-6">
                    <img class="img-produk" src="assets/img/hp2.png" alt="">
                </div>
                <div class="col-md-6">
                    <h2 class="heading-about2">SIMONEY</h2>
                    <p>SIMONEY adalah dompet digital yang mengatur pengeluaran dan pendapatan kamu secara sistematis,dengan 2 fitur tambahan yang akan membuatmu mendapatkan penghasilan tambahan secara mudah.</p>
                    <p>Daftar sekarang dan atur pengeluaranmu serta dapatkan penghasilan dengan memakai SIMONEY</p>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">Download Now <i class="fas fa-download"></i></button>
                    </form>
                </div>
            </div>
        </section>

        <!-- Features -->
        <section class="container">
            <h1 class="heading-about">Features</h1>
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fitur" src="assets/img/hp3.png" alt="">
                </div>
                <div class="col-md-6">
                    <h2 class="heading-about2">SINEBENG</h2>
                    <p>Kami akan memberikan pengalaman yg berbeda dalam
                        mengatur pendapatan kamu,dengan adanya fitur
                        SINEBENG kamu bisa mendapatkan penghasilan dari hanya
                        mengantar penumpang yang searah dari tujuan yang akan kamu tuju.</p>
                    <p>Kalian bisa memilih mau jadi apa untuk hari ini,apakah ingin mencari cuan ( driver ) atau ingin menumpang ke orang lain untuk mendatangi suatu tempat dengan membayar sesuai tarif yang di tentukan oleh si driver</p>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">Download Now <i class="fas fa-download"></i></button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h2 class="heading-about2">SINITIP</h2>
                    <p>Dengan adanya fitur SINITIP cukup beritahu temanmu yang mau nitip makanan sama kamu,maka kamu akan mendapat upah sesuai yang kamu tentukan dari jasa titip yang di kerjakan.</p>
                    <p>
                        Kamu bisa memilih mau jadi apa untuk hari ini,apakah ingin mencari cuan dengan menjadi jasa titip atau hanya ingin menitip makanan ke orang lain dengan membayar upah yang sudah ditentukan.</p>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">Download Now <i class="fas fa-download"></i></button>
                    </form>
                </div>
                <div class="col-md-6">
                    <img class="img-fitur2" src="assets/img/hp4.png" alt="">
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="container">
            <h1 class="heading-about">Testimonials</h1>
            <div class="flex flex-testi">
                <img class="img-testi-left" src="assets/img/testi-left.png" alt="">
                <span class="span-testi">Berikut ulasan dari orang orang yang telah bergabung dengan kami</span>
                <img class="img-testi-right" src="assets/img/testi-right.png" alt="">
            </div>
            <div class="card-testi">
                <div class="card-testi-item">
                    <p>“Cari cuan jadi makin mudah berkat adanya fitur sinebeng di aplikasi simoney”</p>
                    <div class="flex">
                        <img class="img-profile" src="assets/img/client.png" alt="">
                        <div class="column-testi">
                            <span class="name-testi">Genta</span>
                            <span class="desc-testi">Siswa SMKN 2 Tasikmalaya</span>
                        </div>
                    </div>
                </div>
                <div class="card-testi-item">
                    <p>“Terima kasih Developer...aplikasi SIMONEY ini memudahkan saya yang tidak punya kendaraan untuk dapat nebeng dengan aman dan harga yang relatif murah dengan fitur SINEBENG ini !”</p>
                    <div class="flex">
                        <img class="img-profile" src="assets/img/client.png" alt="">
                        <div class="column-testi">
                            <span class="name-testi">Naufal</span>
                            <span class="desc-testi">Siswa SMKN 2 Tasikmalaya</span>
                        </div>
                    </div>
                </div>
                <div class="card-testi-item">
                    <p>“Amazing ! SIMONEY ini memudahkan saya untuk melakukan titip jajan ke kantin.....Good Luck SIMONEY !”</p>
                    <div class="flex">
                        <img class="img-profile" src="assets/img/client.png" alt="">
                        <div class="column-testi">
                            <span class="name-testi">Brian</span>
                            <span class="desc-testi">Siswa SMKN 2 Tasikmalaya</span>
                        </div>
                    </div>
                </div>
                <div class="card-testi-item">
                    <p>“Berkat SIMONEY ini aku jadi SULTAN TASIK !”</p>
                    <div class="flex">
                        <img class="img-profile" src="assets/img/client.png" alt="">
                        <div class="column-testi">
                            <span class="name-testi">Reemar</span>
                            <span class="desc-testi">Siswa SMKN 2 Tasikmalaya</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Akses -->
        <div class="akses">
            <div class="flex">
                <div class="kiri">
                    <img class="img-bg-akses" src="assets/img/bg2.png" alt="">
                    <img class="img-akses" src="assets/img/hp5.png" alt="">
                </div>
                <div class="tengah">
                    <h1 class="heading1-akses" style=" width: 60%;">Siapkan diri kamu bergabung dengan SIMONEY</h1>
                    <p class="desc-akses putih">Gunakan fasilitas kami dan rasakan keuntungannya</p>
                    <form class="d-flex">
                        <button class="btn btn-light" type="submit">Download</button>
                    </form>
                </div>
                <div class="kanan">
                    <img class="img-titik" src="assets/img/titik.png" alt="">
                </div>
            </div>
        </div>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="assets/img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="menu-custom2" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="menu-custom2" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="menu-custom2" href="#features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="menu-custom2" href="#tesstimonial">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="menu-custom2" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>