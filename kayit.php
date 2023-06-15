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

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
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
                <a href="index.php" class="nav-item nav-link ">ANA SAYFA</a>
                <a href="hakkimizda.html" class="nav-item nav-link">HAKKIMIZDA</a>
                <a href="hizmetlerimiz.php" class="nav-item nav-link">HİZMETLERİMİZ</a>
                <a href="iletisim.php" class="nav-item nav-link">İLETİŞİM</a>
                <a href="giris.php" class="nav-item nav-link nav-contact text-white px-5 ms-lg-5" style="background-color: #B74EC8;">GİRİŞ YAP / KAYIT OL<i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar -->


    <!-- Giriş Kayıt Form -->
    <div class="body">
      <div class="layer">
          <div class="form">
              <div class="login-form">
                  <div class="heading">Hesabınıza <b>Giriş Yapın</b></div>
                  <div class="input-box">
                      <form action="islem.php" method="post">
                          <input type="text" class="input" placeholder="Kullanıcı Adı" required>
                          <input type="password" class="input" placeholder="Şifre" required>
                          <input type="submit" class="submit" value="GİRİŞ">
                      </form>
                  </div>
                  <br>
                  Hesabınız yok mu ? <a type="button" id="showCreateBtn" class="togglebtn" style="color: #7C1899;" onclick="show_create()">Hesap Oluşturun.</a>
              </div>
              <div class="signup-form">
                  <div class="heading">Hesap<b> Oluşturun</b></div>
                  <div class="input-box">
                      <form action="islem.php" method="post">
                          <input type="text" class="input" name="kullaniciadi" placeholder="Kullanıcı Adı" required>
                          <input type="password" class="input" name="parola" placeholder="Şifre" required>
                          <input type="password" class="input" name="parolatekrar" placeholder="Şifre Tekrarı" required>
                          <button href="kayit.php" name="kayit" type="submit" class="submit" > HESAP OLUŞTUR </button>
                      </form>
                  </div>
                  <br>
                <a href="giris.php"> <button type="button" id="showCreateBtn" style="color: #B74EC8;" class="togglebtn" onclick="show_login()">Giriş Yapın.</button></a>
              </div>
          </div>
      </div>
  </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script> 
function show_create(){
    $(".login-form").css("display","none");
    $(".signup-form").fadeIn();
}
function show_login(){
    $(".signup-form").css("display","none");
    $(".login-form").fadeIn();
}
</script>
<!-- Giriş Kayıt Form -->


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