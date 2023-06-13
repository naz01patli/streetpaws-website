<?php
require 'inc/db.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Street Paws</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- İkonlar -->
    <link href="img/favicon.ico" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">


    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link href="css/style.css" rel="stylesheet">

    <!-- WP Buton Start-->
    <style>
        .wsLink {
            position: fixed;
            bottom: 20px;
            right: 2.5%;
            z-index: 100;
            width: 60px;
            height: 60px;
            -webkit-transition: .2s linear;
            -moz-transition: .2s linear;
            transition: .2s linear
        }

        .wsLink a {
            position: absolute;
            top: 0;
            right: 0;
            width: 50px;
            height: 50px;
            background: url(https://hemencdn.com/interface/platinum/img/whatsapp.png) no-repeat center;
            -ms-transform-origin: 50% 100%;
            -webkit-transform-origin: 50% 100%;
            transform-origin: 50% 100%;
            animation-name: tada;
            animation-duration: 1s;
            animation-fill-mode: both
        }
    </style>
    <div class="wsLink">
        <a href="https://api.whatsapp.com/send?phone=905555555555" target="_blank" title="Bize Ulaşın!"> </a>
    </div>
    <!--WP Buton End-->
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="index.html" class="navbar-brand ms-lg-5">
            <h1 class="m-0 text-uppercase text-dark"><img src="img/logo3.png" width="250px" height="100px" /> </h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.html" class="nav-item nav-link ">ANA SAYFA</a>
                <a href="hakkimizda.html" class="nav-item nav-link ">HAKKIMIZDA</a>
                <a href="hizmetlerimiz.html" class="nav-item nav-link ">HİZMETLERİMİZ</a>
                <a href="iletisim.php" class="nav-item nav-link active">İLETİŞİM</a>
                <a href="giris.php" class="nav-item nav-link nav-contact text-white px-5 ms-lg-5" style="background-color: #B74EC8;">GİRİŞ YAP / KAYIT OL<i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="border-start border-5 ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-uppercase" style="color: #B74EC8;">İLETİŞİM</h6>
                <h1 class="display-5 text-uppercase mb-0">BİZE HER ZAMAN ULAŞABİLİRSİNİZ</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-7">
                    <form method="post" action="iletisim.php">
                        <div class="row g-3">
                            <div class="col-12">
                                <input type="text" name="txtad" class="form-control bg-light border-0 px-4" placeholder="Adınız" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="email" name="txtemail" class="form-control bg-light border-0 px-4" placeholder="E-mailiniz" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" name="txtkonu" class="form-control bg-light border-0 px-4" placeholder="Konu" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-light border-0 px-4 py-3" name="txtmesaj" rows="8" placeholder="Mesajınız"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn  w-100 py-3" type="submit" style="background-color: #B74EC8; color: #fff;">GÖNDER</button>
                            </div>
                        </div>
                    </form>
                    <script type="text/javascript" src="js/sweetalert2.all.min.js"></script>
                    <?php
                    if ($_POST) {
                        $sorgu = $baglanti->prepare(query: "insert into iletisim SET ad=:ad, email=:email, konu=:konu, mesaj=:mesaj");
                        $ekle = $sorgu->execute(
                            [
                                'ad' => htmlspecialchars($_POST["txtad"]),
                                'email' => htmlspecialchars($_POST["txtemail"]),
                                'konu' => htmlspecialchars($_POST["txtkonu"]),
                                'mesaj' => htmlspecialchars($_POST["txtmesaj"]),
                            ]
                        );

                        if ($ekle) {

                            echo "<script> Swal.fire('Başarılı', 'Mesajınız bize ulaştı', 'success') </script>";
                        }
                    }
                    ?>

                </div>
                <div class="col-lg-5">
                    <div class="bg-light mb-5 p-5">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-geo-alt fs-1 me-3" style="color: #B74EC8;"></i>
                            <div class="text-start">
                                <h6 class="text-uppercase mb-1">Adres</h6>
                                <span>Balıkesir/Bandırma</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-envelope-open fs-1  me-3" style="color: #B74EC8;"></i>
                            <div class="text-start">
                                <h6 class="text-uppercase mb-1">Email</h6>
                                <span>streetpaws@gmail.com</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <i class="bi bi-phone-vibrate fs-1 me-3" style="color: #B74EC8;"></i>
                            <div class="text-start">
                                <h6 class="text-uppercase mb-1">Telefon</h6>
                                <span>0555 555 55 55</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->



    <!-- Footer -->
    <div class="container-fluid bg-light mt-5 py-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-uppercase border-start border-5  ps-3 mb-4" style="color: #B74EC8;">STREET PAWS</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <p class="mt-3 mb-4">Street Paws ekibi olarak 2017 yılında çok az çalışan ve gönüllü ile beraber sokak hayvanlarına yardım amacıyla bu yola başladık. İlerleyen süreçlerde hem çalışan sayımız hem gönüllü sayımızın artması ile birlikte sadece beslemeler ile kalmayıp, kısırlaştırma ve tedavi hizmetlerine de başlamakla beraber başarıyla sürdürmekteyiz.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-uppercase border-start border-5 ps-3 mb-4" style="color: #B74EC8;">İLETİŞİM</h5>
                    <p class="mb-4">Telefon numaralarımızdan, e-mail üzerinden veya hızlı whatsapp üzerinden bize ulaşabilirsiniz.</p>
                    <p class="mb-2"><i class="bi bi-geo-alt me-2" style="color: #B74EC8;"></i>Balıkesir/Bandırma</p>
                    <p class="mb-2"><i class="bi bi-envelope-open me-2" style="color: #B74EC8;"></i>streetpaws@gmail.com</p>
                    <p class="mb-0"><i class="bi bi-telephone me-2" style="color: #B74EC8;"></i>05555555555</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-uppercase border-start border-5 ps-3 mb-4" style="color: #B74EC8;">SAYFALAR</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-body mb-2" href="index.html"><i class="bi bi-arrow-right me-2" style="color: #B74EC8;"></i>Ana Sayfa</a>
                        <a class="text-body mb-2" href="hakkimizda.html"><i class="bi bi-arrow-right me-2" style="color: #B74EC8;"></i>Hakkımızda</a>
                        <a class="text-body mb-2" href="hizmetlerimiz.html"><i class="bi bi-arrow-right me-2" style="color: #B74EC8;"></i>Hizmetlerimiz</a>
                        <a class="text-body" href="iletisim.php"><i class="bi bi-arrow-right me-2" style="color: #B74EC8;"></i>İletişim</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer-->

    <!-- JavaScript  -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Javascript -->
    <script src="js/main.js"></script>
</body>

</html>