<?php

$digilocal = "localhost";
$digiuser = "root";
$digipass = "";
$diginame = "projeödevi";


try {
    $baglanti = new PDO("mysql:host=$digilocal;dbname=$diginame;charset=utf8", $digiuser, $digipass);
    $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
catch(PDOException $e)
    {
    echo "Bağlantı hatası: " . $e->getMessage();
    }
?>

