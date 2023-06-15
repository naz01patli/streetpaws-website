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
<?php 
    session_start();

    if(isset($_SESSION["shoppingCart"])){

        $shoppingCart=$_SESSION["shoppingCart"];
        $total_count=$shoppingCart["summary"]["total_count"];
        $total_price=$shoppingCart["summary"]["total_price"];

        $shopping_products=$shoppingCart["ürünler"];

    } else{

        $total_count=0;
        $total_price=0.0;
    }


    ?>
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

    <!-- Alışveriş Sepeti -->
    <br>
    <div class="container">
       <?php if($total_count>0) { ?> 
        <h2 class="text-center">Sepetinizde<strong class="toplam" style="color: #7C1899;"> <?php echo $total_count; ?></strong> adet ürün bulunmaktadır.</h2>
    
    <hr>
    <div class="row">
        <div class="tablo">
            <div class="col-md-12 ">
                <table class="table table-hover table-bordered table-striped">

                    <thead>
                        <th class="text-center" style="color: #7C1899;">Ürün Resmi</th>
                        <th class="text-center" style="color: #7C1899;">Ürün Adı</th>
                        <th class="text-center" style="color: #7C1899;">Ürün Fiyatı</th>
                        <th class="text-center" style="color: #7C1899;">Ürün Adeti</th>
                        <th class="text-center" style="color: #7C1899;">Toplam</th>
                        <th class="text-center" style="color: #7C1899;">Sepetten Çıkar</th>
                    </thead>

                    <tbody>
                       
                     <?php foreach($shopping_products as $sonuc8) { ?>

                        <tr>
                            <td class="text-center" width="180"><img src="img/<?php echo $sonuc8->foto; ?>" width="50"></td>
                            <td class="text-center"><?php echo $sonuc8->baslik; ?></td>
                            <td class="text-center"><strong><?php echo $sonuc8->fiyat; ?> TL</strong></td>
                            <td class="text-center" width="200">
                                <a href="urundb.php?p=incCount&product_id=<?php echo $sonuc8->id; ?>" class="btn btn-xs btn-success">
                                    <span class="">+</span>
                                </a>

                                <input type="text" value="<?php echo $sonuc8->count; ?>" class="item-count-input" size="5">

                                <a href="urundb.php?p=decCount&product_id=<?php echo $sonuc8->id; ?>" class="btn btn-xs btn-danger">
                                    <span class="">-</span>
                                </a>
                            </td>
                            <td class="text-center"><strong><?php echo $sonuc8->total_price; ?> TL</strong></td>
                            <td class="text-center" width="200"><button product-id="<?php echo $sonuc8->id; ?>" class="btn btn-danger btn-sm removeFromCartBtn"><span class="glyphicon glyphicon-remove"></span>Sepetten Çıkar</button></td>

                            
                        </tr>

                        <?php } ?>


                    </tbody>
                    
                    <tfoot>
                        <th colspan="3" class="text-right">
                            <span style="font-size: 18px;"> Toplam Ürün: <span style="color: #7C1899;"><?php echo $total_count; ?> adet</span> </span>
                        </th>
                        <th colspan="3" class="text-right">
                            <span style="font-size: 18px;"> Toplam Tutar: <span style="color: #7C1899;"><?php echo $total_price; ?> TL</span> </span>
                        </th>


                    </tfoot>




                </table>








            </div>
        </div>
    </div>
    <?php } else { ?>

     <div class="alert alert-info">

     <strong>Sepetinizde henüz bir ürün bulunmamaktadır. Eklemek için<a href="hizmetlerimiz.php#urun"> tıklayınız.</a></strong>

     </div>
        <?php } ?>
    </div>
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

<script type="text/javascript" src="js/sepettencikar.js"></script>