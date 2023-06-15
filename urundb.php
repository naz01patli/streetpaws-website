<?php

include("inc/db.php");
session_start();




function addToCart($product_item)
{

    if (isset($_SESSION["shoppingCart"])) {

        $shoppingCart = $_SESSION["shoppingCart"];
        $ürünler = $shoppingCart["ürünler"];
    } else {
        $ürünler = array();
    }

    if (array_key_exists($product_item->id, $ürünler)) {
        $ürünler[$product_item->id]->count++;
    } else {
        $ürünler[$product_item->id] = $product_item;
    }


    $total_price = 0.0;
    $total_count = 0;

    foreach ($ürünler as $sonuc8) {
        $sonuc8->total_price = $sonuc8->count * $sonuc8->fiyat;
        $total_price = $total_price + $sonuc8->total_price;
        $total_count += $sonuc8->count;
    }

    echo $total_count . "=>" . $total_price;

    $summary["total_price"] = $total_price;
    $summary["total_count"] = $total_count;


    $_SESSION["shoppingCart"]["ürünler"] = $ürünler;
    $_SESSION["shoppingCart"]["summary"] = $summary;

    return $total_count;
}

function removeFromCart($product_id)
{


    if (isset($_SESSION["shoppingCart"])) {

        $shoppingCart = $_SESSION["shoppingCart"];
        $ürünler = $shoppingCart["ürünler"];


        if (array_key_exists($product_id, $ürünler)) {
            unset($ürünler[$product_id]);
        }


        $total_price = 0.0;
        $total_count = 0;

        foreach ($ürünler as $sonuc8) {
            $sonuc8->total_price = $sonuc8->count * $sonuc8->fiyat;
            $total_price = $total_price + $sonuc8->total_price;
            $total_count += $sonuc8->count;
        }

        echo $total_count . "=>" . $total_price;

        $summary["total_price"] = $total_price;
        $summary["total_count"] = $total_count;


        $_SESSION["shoppingCart"]["ürünler"] = $ürünler;
        $_SESSION["shoppingCart"]["summary"] = $summary;


        return true;
    }
}

function incCount($product_id)
{

    if (isset($_SESSION["shoppingCart"])) {

        $shoppingCart = $_SESSION["shoppingCart"];
        $ürünler = $shoppingCart["ürünler"];
    
    if (array_key_exists($product_id, $ürünler)) {
        $ürünler[$product_id]->count++;
    } 

    $total_price = 0.0;
    $total_count = 0;

    foreach ($ürünler as $sonuc8) {
        $sonuc8->total_price = $sonuc8->count * $sonuc8->fiyat;
        $total_price = $total_price + $sonuc8->total_price;
        $total_count += $sonuc8->count;
    }


    $summary["total_price"] = $total_price;
    $summary["total_count"] = $total_count;


    $_SESSION["shoppingCart"]["ürünler"] = $ürünler;
    $_SESSION["shoppingCart"]["summary"] = $summary;

    return true;
}
}

function decCount($product_id)
{

    if (isset($_SESSION["shoppingCart"])) {

        $shoppingCart = $_SESSION["shoppingCart"];
        $ürünler = $shoppingCart["ürünler"];
  
    if (array_key_exists($product_id, $ürünler)) {
        $ürünler[$product_id]->count--;
    } 

    $total_price = 0.0;
    $total_count = 0;

    foreach ($ürünler as $sonuc8) {
        $sonuc8->total_price = $sonuc8->count * $sonuc8->fiyat;
        $total_price = $total_price + $sonuc8->total_price;
        $total_count += $sonuc8->count;
    }


    $summary["total_price"] = $total_price;
    $summary["total_count"] = $total_count;


    $_SESSION["shoppingCart"]["ürünler"] = $ürünler;
    $_SESSION["shoppingCart"]["summary"] = $summary;

    return true;
} 

}

if (isset($_POST["p"])) {
    $islem = $_POST["p"];
    if ($islem == "addToCart") {

        $id = $_POST["product_id"];

        $sonuc8 = $baglanti->query("SELECT * FROM ürünler WHERE id={$id}", PDO::FETCH_OBJ)->fetch();
        $sonuc8->count = 1;
        echo addToCart($sonuc8);
    } elseif ($islem == "removeFromCart") {

        $id = $_POST["product_id"];
        echo removeFromCart($id);
    }
}


if (isset($_GET["p"])) {
    $islem = $_GET["p"];
    if ($islem == "incCount") {

        $id = $_GET["product_id"];


        if (incCount($id)) {
            header("Location:sepet.php");
        }
    } elseif ($islem == "decCount") {

        $id = $_GET["product_id"];

        if (decCount($id)) {
            header("Location:sepet.php");
        }
    }
}
