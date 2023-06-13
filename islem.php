<?php

ob_start();
session_start();


require 'inc/db.php';


if (isset($_POST['kayit'])) {
    $kullaniciadi = $_POST['kullaniciadi'];
    $parola = $_POST['parola'];
    $parolatekrar = @$_POST['parolatekrar'];

    if (!$kullaniciadi) {
        echo '<div class="alert alert-success" role="alert">
    Kullanıcı adı girin!
  </div>';
    } elseif (!$parola || !$parolatekrar) {
        echo '<div class="alert alert-success" role="alert">
    Parola girin!
  </div>';
    } elseif ($parola != $parolatekrar) {
        echo '<div class="alert alert-danger" role="alert">
    Girdiğiniz şifreler birbiriyle aynı değil, tekrar deneyin!
  </div>';
    } else {
        $sorgu = $baglanti->prepare('INSERT INTO kullanici SET kullanici_name=?, kullanici_password=?');
        $ekle = $sorgu->execute([
            $kullaniciadi, $parola
        ]);
        if ($ekle) {
            echo '<div class="alert alert-success" role="alert">
        Kayıt işleminiz başarıyla gerçekleşti,yönlendiriliyorsunuz!
      </div>';
            header('Refresh:2; index.html');
        } else {
            echo '<div class="alert alert-danger" role="alert">
        Kayıt işleminiz sırasında hata oluştu, tekrar deneyin!
      </div>';
        }
    }
}

if (isset($_POST['giris'])) {
    $kullaniciadi = $_POST['kullaniciadi'];
    $parola = $_POST['parola'];

    if (!$kullaniciadi) {
        echo '<div class="alert alert-danger" role="alert">
    Kullanıcı adı girin!
  </div>';
    } elseif (!$parola) {
        echo '<div class="alert alert-danger" role="alert">
    Parola girin!
  </div>';
    } else {

        $kullanici_sor = $baglanti->prepare('SELECT * FROM kullanici WHERE kullanici_name=? || kullanici_password=?');
        $kullanici_sor->execute([
            $kullaniciadi, $parola
        ]);

        $say = $kullanici_sor->rowcount();
        if ($say == 1) {
            $_SESSION['kullaniciadi'] = $kullaniciadi;
            echo '<div class="alert alert-success" role="alert">
            Giriş işleminiz başarıyla gerçekleşti, yönlendiriliyorsunuz!
          </div>';
            header('Refresh:2; index.html');
        } else {
            echo '<div class="alert alert-danger" role="alert">
            Bir hata oluştu, tekrar deneyin!
          </div>';
        }
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Street Paws</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body></body>

</html>