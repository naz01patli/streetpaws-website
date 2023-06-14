<?php

include("inc/db.php");

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
        .wsLink{position:fixed;bottom:20px;right:2.5%;z-index:100;width:60px;height:60px;-webkit-transition:.2s linear;-moz-transition:.2s linear;transition:.2s linear}.wsLink a{position:absolute;top:0;right:0;width:50px;height:50px;background:url(https://hemencdn.com/interface/platinum/img/whatsapp.png) no-repeat center;-ms-transform-origin:50% 100%;-webkit-transform-origin:50% 100%;transform-origin:50% 100%;animation-name:tada;animation-duration:1s;animation-fill-mode:both}
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
                <a href="index.php" class="nav-item nav-link active">ANA SAYFA</a>
                <a href="hakkimizda.html" class="nav-item nav-link">HAKKIMIZDA</a>
                <a href="hizmetlerimiz.php" class="nav-item nav-link">HİZMETLERİMİZ</a>
                <a href="iletisim.php" class="nav-item nav-link">İLETİŞİM</a>
                <a href="giris.php" class="nav-item nav-link nav-contact text-white px-5 ms-lg-5" style="background-color: #B74EC8;">GİRİŞ YAP / KAYIT OL<i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar -->


    <!-- Slider-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="padding-right: 75px; padding-left: 75px; padding-top: 30px; padding-bottom: 30px;">
          <div class="carousel-item active">
            <img src="img/zyro-image (21).png" style="height: 500px;" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/yardımfoto3.jpg" style="height: 500px;" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/slider3.jfif" style="height: 500px;" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev"  type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" style="background-color: black; height: 50px; width: 50px;"  aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" style="background-color: black; height: 50px; width: 50px;" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <!-- Slider -->

    <!-- Hakkımızda -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="img/zyro-image (20).png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="border-start border-5 ps-5 mb-5" style="color: #B74EC8;">
                        <h6 class="text-uppercase" style="color: #B74EC8;">Hakkımızda</h6>
                        <h1 class="display-5 text-uppercase mb-0">SOKAKTAKİ DOSTLARIMIZIN YANINDAYIZ</h1>
                    </div>
                    <h4 class="text-body mb-4">Sokaktaki canlarımız için buradayız.</h4>
                    <div class="bg-light p-4">
                        <ul class="nav nav-pills justify-content-between mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100 active" style="background-color: #B74EC8;" id="pills-1-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1"
                                    aria-selected="true">MİSYONUMUZ</button>
                            </li>
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100"  style="background-color: #B74EC8;" id="pills-2-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2"
                                    aria-selected="false">VİZYONUMUZ</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                                <p class="mb-0">Street Paws ekibi olarak 2017 yılında çok az çalışan ve gönüllü ile beraber sokak hayvanlarına yardım amacıyla bu yola başladık. İlerleyen süreçlerde hem çalışan sayımız hem gönüllü sayımızın artması ile birlikte sadece beslemeler ile kalmayıp, kısırlaştırma ve tedavi hizmetlerine de başlamakla beraber başarıyla sürdürmekteyiz.</p>
                            </div>
                            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                                <p class="mb-0">Bu yola başlama amacımızı her gün karşılaştığımız onlarca kötü durumdaki canlar sayesinde unutmuyor, bunun verdiği kararlılıkla geleceğe emin adımlarla yol alıyoruz. Öncelikli olarak, ulaşamadığımız hiçbir can kalmaması için daha çok insana ulaşmak ve ardından kısırlaştırma tedavilerimizi tüm gereken hayvanlarımıza yapmak yaymak başlıca hedeflerimizden. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hakkımızda -->
    

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
                            <a class="text-uppercase" style="color: #B74EC8;" href="hizmetlerimiz.html">Read More<i class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-food display-1 me-4" style="color: #B74EC8;"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">BESLEME</h5>
                            <p>Düzenli aralıklarla beslemeler yapıyoruz. Bulunduğunuz bölgede beslemeye ihtiyaç varsa bizimle iletişime geçebilirsiniz</p>
                            <a class="text-uppercase" style="color: #B74EC8;" href="hizmetlerimiz.html">Read More<i class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-grooming display-1 me-4" style="color: #B74EC8;"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">KISIRLAŞTIRMA</h5>
                            <p>Bünyemizde bulunan veteriner hekimler tarafından düzenli olarak kısırlaştırmalarımızı yapıyoruz.</p>
                            <a class="text-uppercase" style="color: #B74EC8;" href="hizmetlerimiz.html">Read More<i class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-vaccine display-1 me-4" style="color: #B74EC8;"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">TEDAVİ</h5>
                            <p>Bünyemizdeki veterinerlerimiz ve gönüllü veteriner hekimler tarafından onlarca can tedavi oluyor, sağlığına kavuşuyor.</p>
                            <a class="text-uppercase" style="color: #B74EC8;" href="hizmetlerimiz.html">Read More<i class="bi bi-chevron-right"></i></a>
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
            <h6 class="text-uppercase" style="color: #B74EC8;">ÜRÜNLERİMİZ</h6>
            <h1 class="display-5 text-uppercase mb-0">MAMA ALIN, SİZDE KATKI SAĞLAYIN</h1>
        </div>

        <div class="owl-carousel product-carousel">
            <?php
            $sorgu = $baglanti->prepare(query: "select * from ürünler WHERE aktif=1 ORDER BY sira");
            $sorgu->execute();
            $index = 0;
            while ($sonuc = $sorgu->fetch()) {
                $index++;
            ?>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center <?php echo $index == 1 ? "active" : ""; ?>">
                        <img class="img-fluid mb-4" src="img/<?= $sonuc["foto"] ?>" style="height: 200px;" alt="">
                        <h6 class="text-uppercase"><?= $sonuc["baslik"] ?></h6>
                        <h5 class=" mb-0" style="color: #B74EC8;"><?= $sonuc["fiyat"] ?></h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-primary py-2 px-3" style="background-color: #B74EC8;" href="<?= $sonuc["link"] ?>"><i class="">SİPARİŞ VER</i></a>
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

    <!-- Ziyaretçi Yorumları -->
    <div class="container-fluid bg-testimonial py-5" style="margin: 45px 0;">
        <div class="container py-5">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel bg-white p-5">
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-4">
                                <img class="img-fluid mx-auto" src="img/YORUMM.png" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                                    <i class="bi bi-chat-square-quote " style="color: #B74EC8;"></i>
                                </div>
                            </div>
                            <p>Hayvanlara olan sevgim herkes tarafından bilinir. Sokakta yardıma muhtaç canlar için böyle bir platform yapmanız harika. Onlar adına teşekkür ederim Street Paws ekibi.</p>
                            <hr class="w-25 mx-auto">
                            <h5 class="text-uppercase">GÜLŞEN HANIM</h5>
                            <span>Özel Sektör</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-4">
                                <img class="img-fluid mx-auto" src="img/YORUMM.png" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                                    <i class="bi bi-chat-square-quote " style="color: #B74EC8;"></i>
                                </div>
                            </div>
                            <p>Bir veteriner olarak sokak hayvanlarının ne kadar zor durumda olduklarını her gün görüyorum. Çok yararlı bir iş yapıyorsunuz. Gönüllü olarak bende tedavi çalışmalarına katılacağım. Teşekkürler.</p>
                            <hr class="w-25 mx-auto">
                            <h5 class="text-uppercase">ADNAN BEY</h5>
                            <span>Veteriner</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ziyaretçi Yorumları -->

    <!-- Footer -->
    <div class="container-fluid bg-light mt-5 py-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-uppercase border-start border-5  ps-3 mb-4" style="color: #B74EC8;">STREET PAWS</h5>
                     <p class="mt-3 mb-4">Street Paws ekibi olarak 2017 yılında çok az çalışan ve gönüllü ile beraber sokak hayvanlarına yardım amacıyla bu yola başladık. İlerleyen süreçlerde hem çalışan sayımız hem gönüllü sayımızın artması ile birlikte sadece beslemeler ile kalmayıp, kısırlaştırma ve tedavi hizmetlerine de başlamakla beraber başarıyla sürdürmekteyiz. </p>
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