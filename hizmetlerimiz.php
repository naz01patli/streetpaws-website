<?php

include("inc/db.php");
include("urundb.php");
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
        <a href="index.php" class="navbar-brand ms-lg-5">
            <h1 class="m-0 text-uppercase text-dark"><img src="img/logo3.png" width="250px" height="100px" /> </h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link ">ANA SAYFA</a>
                <a href="hakkimizda.html" class="nav-item nav-link ">HAKKIMIZDA</a>
                <a href="hizmetlerimiz.php" class="nav-item nav-link active">HİZMETLERİMİZ</a>
                <a href="iletisim.php" class="nav-item nav-link">İLETİŞİM</a>
                <a href="giris.php" class="nav-item nav-link nav-contact text-white px-5 ms-lg-5" style="background-color: #B74EC8;">GİRİŞ YAP / KAYIT OL<i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar -->


    <!-- Hizmetler -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 ps-5 mb-5" style="max-width: 600px; color: #B74EC8;">
                <h6 class="text-uppercase" style="color: #B74EC8;">HİZMETLERİMİZ</h6>
                <h1 class="display-5 text-uppercase mb-0">ONLAR İÇİN EN İYİSİNİ YAPIYORUZ</h1>
            </div>
            <div class="row g-5">
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-house display-1 me-4" style="color: #B74EC8;"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">SAHİPLENDİRME</h5>
                            <p>Sahiplendirme ilanları için açmış olduğumuz yan instagram hesabımızdan ailenize bir yeni üye ekleyebilirsiniz. </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-food display-1 me-4" style="color: #B74EC8;"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">BESLEME</h5>
                            <p>Düzenli aralıklarla beslemeler yapıyoruz. Bulunduğunuz bölgede beslemeye ihtiyaç varsa bizimle iletişime geçebilirsiniz</p>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-grooming display-1 me-4" style="color: #B74EC8;"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">KISIRLAŞTIRMA</h5>
                            <p>Bünyemizde bulunan veteriner hekimler tarafından düzenli olarak kısırlaştırmalarımızı yapıyoruz.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-vaccine display-1 me-4" style="color: #B74EC8;"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">TEDAVİ</h5>
                            <p>Bünyemizdeki veterinerlerimiz ve gönüllü veteriner hekimler tarafından onlarca can tedavi oluyor, sağlığına kavuşuyor.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hizmetler-->

    <!-- Ürünler -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 ps-5 mb-5" style="max-width: 600px; color: #B74EC8;">
                <a name="urun"></a>
                <h6 class="text-uppercase" style="color: #B74EC8;">ÜRÜNLERİMİZ</h6>
                <h1 class="display-5 text-uppercase mb-0">MAMA ALIN, SİZDE KATKI SAĞLAYIN</h1>
            </div>

            <div class="owl-carousel product-carousel">
                <?php
                $sorgu8 = $baglanti->prepare(query: "select * from ürünler WHERE aktif=1 ORDER BY sira");
                $sorgu8->execute();
                $index = 0;
                while ($sonuc8 = $sorgu8->fetch()) {
                    $index++;
                ?>
                    <div class="pb-5">
                        <div class="product-item position-relative bg-light d-flex flex-column text-center <?php echo $index == 1 ? "active" : ""; ?>">
                            <img class="img-fluid mb-4" src="img/<?= $sonuc8["foto"] ?>" style="height: 200px;" alt="">
                            <h6 class="text-uppercase"><?= $sonuc8["baslik"] ?></h6>
                            <h5 class=" mb-0" style="color: #B74EC8;"><?= $sonuc8["fiyat"] ?> TL</h5>
                            <div class="btn-action d-flex justify-content-center">
                                <a href="<?= $sonuc8["link"] ?>" product-id="<?= $sonuc8["id"] ?>" class="btn btn-primary py-2 px-3 addToCartBtn" style="background-color: #B74EC8;" role="button" ><i class="">SİPARİŞ VER</i></a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Ürünler -->

    <!-- Video-->
    <div class="container">
        <div class="border-start border-5 ps-5 mb-5" style=" color: #B74EC8;">
            <h6 class="text-uppercase" style="color: #B74EC8;">REKLAMLARIMIZ</h6>
            <h1 class="display-5 text-uppercase mb-0">REKLAM İZLEYEREK BİZE DESTEK OLABİLİRSİNİZ</h1>
        </div>
    </div>
    <div class="container py-5 mb-5 hero-header">
        <div class="container py-5">

            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        <div class="duzen">
                            <a href="https://www.youtube.com/watch?v=WMnW4vRKiQs&ab_channel=LiderPetFood" type="button" class="btn-play">
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video -->


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
                        <a class="text-body mb-2" href="index.php"><i class="bi bi-arrow-right me-2" style="color: #B74EC8;"></i>Ana Sayfa</a>
                        <a class="text-body mb-2" href="hakkimizda.html"><i class="bi bi-arrow-right me-2" style="color: #B74EC8;"></i>Hakkımızda</a>
                        <a class="text-body mb-2" href="hizmetlerimiz.php"><i class="bi bi-arrow-right me-2" style="color: #B74EC8;"></i>Hizmetlerimiz</a>
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
<script src="js/sepetekle.js"></script>